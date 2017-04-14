<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Link;
use Session;
class LinkController extends Controller{
    protected $rules = [
        'link_name' => 'required',
        'link_url' => 'required',
    ];
    public function create(Request $request){
        if($request->isMethod('post')){
            $this->validate($request,$this->rules);
            $link = new Link;
            $link->link_name = $request->input('link_name');
            $link->link_title = $request->input('link_title');
            $link->link_url = $request->input('link_url');
            // 
            if($link->save()){
                Session::flash('success','Tạo mới thành công.');
                return redirect('user/link/index');
            }else{
                Session::flash('error','Tạo mới lỗi.');
                return back();
            }   
        }else{
            return view('user.link.create'); 
        }
    }
    public function edit($link_id,Request $request){
        $link = Link::find($link_id);
        if($request->isMethod('post')){
            $this->validate($request,$this->rules);
            $link->link_name = $request->input('link_name');
            $link->link_title = $request->input('link_title');
            $link->link_url = $request->input('link_url');
            // 
            if($link->save()){
                Session::flash('success','Sửa thành công.');
                return redirect('user/link/index');
            }else{
                Session::flash('error','Sửa lỗi.');
                return back();
            }   
        }else{
            $data['link'] = $link;
            return view('user.link.edit',['data'=>$data]); 
        }
    }
    public function index(Request $request){
        $links = Link::orderby('id','desc');
        $links = $links->get();
        $data['links'] = $links;
        return view('user.link.index',['data'=>$data]); 
    }
    public function delete($link_id,Request $request){
        $link = Link::find($link_id);
        if($request->isMethod('post')){
            if($link->delete()){
                Session::flash('success','Xóa thành công.');
                return redirect('user/link/index');
            }else{
                Session::flash('error','Xóa lỗi.');
                return back();
            }
        }else{
            $data['link'] = $link;
            return view('user.link.delete',['data'=>$data]); 
        }
    }
}