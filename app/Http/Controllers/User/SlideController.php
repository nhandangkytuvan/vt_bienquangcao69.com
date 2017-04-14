<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Slide;
use Gate;
use Session;
class SlideController extends Controller{
    protected $rules = [
        'slide_url' => 'required',
        'slide_image' => 'required',
    ];
    public function create(Request $request){
        $user = Session::get('user');
        if($request->isMethod('post')){
            $this->validate($request,$this->rules);
            $slide = new Slide;
            $slide->slide_url = $request->input('slide_url');
            $slide->slide_image = $request->input('slide_image');
            // 
            if($slide->save()){
                Session::flash('success','Tạo mới thành công.');
                return redirect('user/slide/index');
            }else{
                Session::flash('error','Tạo mới lỗi.');
                return back();
            }   
        }else{
            return view('user.slide.create'); 
        }
    }
    public function edit($slide_id,Request $request){
        $user = Session::get('user');
        $slide = Slide::find($slide_id);
        if($request->isMethod('post')){
            $this->validate($request,$this->rules);
            $slide->slide_url = $request->input('slide_url');
            $slide->slide_image = $request->input('slide_image');
            // 
            if($slide->save()){
                Session::flash('success','Sửa thành công.');
                return redirect('user/slide/index');
            }else{
                Session::flash('error','Sửa lỗi.');
                return back();
            }   
        }else{
            $data['slide'] = $slide;
            return view('user.slide.edit',['data'=>$data]); 
        }
    }
    public function index(Request $request){
        $user = Session::get('user');
        $slides = Slide::orderby('id','desc');
        $slides = $slides->get();
        $data['slides'] = $slides;
        return view('user.slide.index',['data'=>$data]); 
    }
    public function delete($slide_id,Request $request){
        $user = Session::get('user');
        $slide = Slide::find($slide_id);
        if($request->isMethod('post')){
            if($slide->delete()){
                Session::flash('success','Xóa thành công.');
                return redirect('user/slide/index');
            }else{
                Session::flash('error','Xóa lỗi.');
                return back();
            }
        }else{
            $data['slide'] = $slide;
            return view('user.slide.delete',['data'=>$data]); 
        }
    }
}