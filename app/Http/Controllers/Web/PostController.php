<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Events\VisitPostEvent;
use BrowserDetect;
class PostController extends Controller{
    public function show($post_alias,$post_id,Request $request){
    	$post = Post::find($post_id);
        if(!$post){
            return redirect('/');
        }
        // event view post active
        event(new VisitPostEvent($post));
        // ------------
        $data['post'] = $post;
        if(BrowserDetect::isDesktop()){
        	return view('web.desktop.post',['data'=>$data]); 
        }else{
        	return view('web.mobile.post',['data'=>$data]); 
        }
    }
}