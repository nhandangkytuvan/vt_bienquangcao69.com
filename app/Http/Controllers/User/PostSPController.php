<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\PostSP;
use App\User;
use App\Term;
use File;
use Gate;
use Session;
class PostSPController extends Controller{
    public function create(Request $request){
        $user = Session::get('user');
    	$terms = Term::get();
        if($request->isMethod('post')){
            $this->validate($request,Post::$rules,Post::$messages);
            $post = new Post;
            $post->user_id = $user->id;
            $post->term_id = $request->input('term_id');
            $post->post_name = $request->input('post_name');
            $post->post_alias = str_slug($request->input('post_name'),'-');
            $post->post_group = 1;//sp
            $post->post_description = $request->input('post_description');
            $post->post_detail = $request->input('post_detail');
            $post->post_detail = str_replace("src=\"../../public/img","src=\"../../../public/img",$post->post_detail);
            $post->post_keyword = $request->input('post_keyword');
            if($request->has('post_status')){
                $post->post_status = 1;
            }else{
                $post->post_status = 0;
            }

            if($request->hasFile('post_avatar')){
                $file = $request->file('post_avatar');
                $post_avatar = $post->post_alias.'-'.time().'.'.$file->extension();
                $file->move(public_path().'/img',$post_avatar);
                $post->post_avatar = $post_avatar;
            }
            if($post->save()){
                //$post->post_detail = str_replace("src=\"../../public/img","src=\"../../../public/img",$post->post_detail);
                //$post->save();
                Session::flash('success','Thêm thành công.');
                //
                $postsp = new PostSP;
                $postsp->post_id = $post->id;
                if($request->has('post_price')){
                    $postsp->post_price = $request->input('post_price');
                    $postsp->post_price = str_replace(',00','',$postsp->post_price);
                    $postsp->post_price = str_replace('.','',$postsp->post_price);
                }
                $postsp->save();
                
                return redirect('user/post-sp/edit/'.$post->id);
            }else{
                Session::flash('error','Thêm lỗi.');
                return back();
            }
        }else{
            $data['user'] = $user;
            $data['terms'] = $terms;
            return view('user.postsp.create',['data'=>$data]); 
        }
    }
    public function edit($post_id,Request $request){
    	$user = Session::get('user');
        $terms = Term::get();
        $post = Post::find($post_id);
        if($request->isMethod('post')){
            if (Gate::forUser($user)->denies('edit-post', $post)) {
                Session::flash('error','Bài viết không phải của bạn.');
                return back();
            }
            $this->validate($request,Post::$rules,Post::$messages);
            $post->term_id = $request->input('term_id');
            $post->post_name = $request->input('post_name');
            $post->post_alias = str_slug($request->input('post_name'),'-');
            $post->post_group = 1;//sp
            $post->post_description = $request->input('post_description');
            $post->post_detail = $request->input('post_detail');
            $post->post_detail = str_replace("src=\"../../public/img","src=\"../../../public/img",$post->post_detail);
            $post->post_keyword = $request->input('post_keyword');
            if($request->has('post_status')){
                $post->post_status = 1;
            }else{
                $post->post_status = 0;
            }
            if($request->hasFile('post_avatar')){
                $file = $request->file('post_avatar');
                $post_avatar = $post->post_alias.'-'.time().'.'.$file->extension();
                $file->move(public_path().'/img',$post_avatar);
                $post->post_avatar = $post_avatar;
            }
            if($post->save()){
                //$post->post_detail = str_replace("src=\"../../public/img","src=\"../../../public/img",$post->post_detail);
                //$post->save();
                Session::flash('success','Sửa thành công.');
                //
                $postsp = $post->postSP;
                if($request->has('post_price')){
                    $postsp->post_price = $request->input('post_price');
                    $postsp->post_price = str_replace(',00','',$postsp->post_price);
                    $postsp->post_price = str_replace('.','',$postsp->post_price);
                }
                $postsp->save();
                //
                return redirect('user/post-sp/edit/'.$post->id);
            }else{
                Session::flash('error','Sửa lỗi.');
                return back();
            }
        }else{
            $data['user'] = $user;
        	$data['post'] = $post;
            $data['terms'] = $terms;
            return view('user.postsp.edit',['data'=>$data]); 
        }
    }
    public function index(Request $request){
        $user = Session::get('user');
        $users = User::get();
        $terms = Term::get();
        $posts = Post::where('post_group',1)->orderby('id','desc');
        if($request->input('post_name')){
            $posts = $posts->where('post_name','like','%'.$request->input('post_name').'%');
        }
        if($request->input('post_created')){
            $created_at = date('Y-m-d',strtotime($request->input('post_created')));
            $posts = $posts->whereDate('created_at',$created_at);
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
            $posts = $posts->whereIn('term_id',$term_ids);
        }
        if($request->input('user_id')){
            $posts = $posts->where('user_id',$request->input('user_id'));
        }
        $posts = $posts->paginate(22);
        $data['user'] = $user;
        $data['users'] = $users;
        $data['request'] = $request;
        $data['posts'] = $posts;
        $data['terms'] = $terms; 
        if($request->input('view')=='list'){
            return view('user.postsp.indexList',['data'=>$data]);
        }elseif($request->input('view')=='icon'){
            return view('user.postsp.indexIcon',['data'=>$data]);
        }else{
            return view('user.postsp.indexList',['data'=>$data]);
        }
    }
    public function delete($post_id,Request $request){
        $user = Session::get('user');
        $post = Post::find($post_id);
        if($request->isMethod('post')){
            if (Gate::forUser($user)->denies('delete-post', $post)) {
                Session::flash('error','Bài viết không phải của bạn.');
                return back();
            }
            if($post->delete()){
                Session::flash('success','Xóa thành công.');
                File::delete(public_path().'/img/'.$post->post_avatar);
                return redirect('user/post-sp/index');
            }else{
                Session::flash('error','Xóa lỗi.');
                return back();
            }
        }else{
            $data['post'] = $post;
            return view('user.postsp.delete',['data'=>$data]); 
        }
    }
}