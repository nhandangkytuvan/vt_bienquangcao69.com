<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Media;
use App\User;
use App\Term;
use File;
use Gate;
use Session;
class MediaController extends Controller{
    protected $rules_create = [
        'media_name' => 'required',
        'media_file' => 'required',
        'term_id' => 'required',
    ];
    protected $messages_create = [
        'media_name.required' => 'Bạn chưa nhập tên ảnh.',
        'media_file.required' => 'Bạn chưa chọn ảnh úp lên.',
        'term_id.required' => 'Bạn chưa chọn thư mục lưu.',
    ];
    protected $rules_edit = [
        'media_name' => 'required',
        'term_id' => 'required',
    ];
    protected $messages_edit = [
        'media_name.required' => 'Bạn chưa nhập tên ảnh.',
        'term_id.required' => 'Bạn chưa chọn thư mục lưu.',
    ];
    public function create(Request $request){
        $user = Session::get('user');
    	$terms = Term::get();
        if($request->isMethod('post')){
            $this->validate($request,$this->rules_create,$this->messages_create);
            $media = new Media;
            $media->user_id = $user->id;
            $media->term_id = $request->input('term_id');
            $media->media_name = $request->input('media_name');
            $media->media_alias = str_slug($request->input('media_name'),'-');

            $file = $request->file('media_file');
            $extension = $file->extension();
            $media_file = $media->media_alias.'-'.time().'.'.$extension;
            $path = $file->move(public_path().'/img',$media_file);
            $media->media_file = $media_file;

            if($media->save()){
                Session::flash('success','Upload ảnh thành công.');
                return redirect('user/media/edit/'.$media->id);
            }else{
                Session::flash('error','Upload ảnh lỗi hỏi trường.');
                return back();
            }
        }else{
            $data['user'] = $user;
            $data['terms'] = $terms;
            return view('user.media.create',['data'=>$data]); 
        }
    }
    public function edit($media_id,Request $request){
        $user = Session::get('user');
        $terms = Term::get();
        $media = Media::find($media_id);
        if($request->isMethod('post')){
            if (Gate::forUser($user)->denies('edit-media', $media)) {
                Session::flash('error','Ảnh không phải của bạn.');
                return back();
            }
            $this->validate($request,$this->rules_edit,$this->messages_edit);
            $media->media_name = $request->input('media_name');
            $media->media_alias = str_slug($request->input('media_name'),'-');
            if($media->save()){
                Session::flash('success','Sửa thông tin ảnh thành công.');
                return redirect('user/media/edit/'.$media->id);
            }else{
                Session::flash('error','Sửa thông tin ảnh lỗi hỏi trường');
                return back();
            }
        }else{
            $data['user'] = $user;
        	$data['media'] = $media;
            $data['terms'] = $terms;
            return view('user.media.edit',['data'=>$data]); 
        }
    }
    public function index(Request $request){
        $user = Session::get('user');
        $users = User::get();
        $terms = Term::get();
        $medias = Media::orderby('id','desc');
        if($request->input('media_name')){
            $medias = $medias->where('media_name','like','%'.$request->input('media_name').'%');
        }
        if($request->input('term_id')){
            $term_ids = [];
            $term = Term::find($request->input('term_id'));
            $term_childs = $term->children;
            if(count($term_childs)){
                foreach ($term_childs as $key => $term_child) {
                    $term_ids[] = $term_child->id;
                }
            }
            $term_ids[] = $term->id;
            $medias = $medias->whereIn('term_id',$term_ids);
        }
        if($request->input('user_id')){
            $medias = $medias->where('user_id',$request->input('user_id'));
        }
        $medias = $medias->paginate(24);
        $data['user'] = $user;
        $data['users'] = $users;
        $data['request'] = $request;
        $data['medias'] = $medias;
        $data['terms'] = $terms;
        $data['menu'] = 'menu.menuUser'; 
        if($request->input('view')=='list'){
            return view('user.media.indexList',['data'=>$data]);
        }elseif($request->input('view')=='icon'){
            return view('user.media.indexIcon',['data'=>$data]);
        }else{
            return view('user.media.indexThumbnail',['data'=>$data]);
        }
    }
    public function delete($media_id,Request $request){
        $user = Session::get('user');
        $media = Media::find($media_id);
        if($request->isMethod('post')){
            if (Gate::forUser($user)->denies('delete-media', $media)) {
                Session::flash('error','Ảnh không phải của bạn.');
                return back();
            }
            if($media->delete()){
                Session::flash('success','Xóa thành công.');
                File::delete(public_path().'/img/'.$media->media_file);
                return redirect('user/media/index');
            }else{
                Session::flash('error','Xóa ảnh thành công.');
                return back();
            }
        }else{
            Session::flash('info','Nếu chắc ảnh không thuộc bài viết nào thì hẵng xóa đi. Còn không thì đừng xóa.');
            $data['media'] = $media;
            return view('user.media.delete',['data'=>$data]); 
        }
    }
}