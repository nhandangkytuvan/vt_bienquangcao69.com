<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Post;
use App\Term;
use View;
use Response;
use BrowserDetect;
class HomeController extends Controller{
	public function show(Request $request){
		$data['request'] = $request;
		$data['posts_sp'] = Post::where('post_group',1)->limit(12)->get();
		$data['posts_new'] = Post::where('post_group',0)->limit(6)->get();
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.home',['data'=>$data]);
		}else{
			return view('web.mobile.home',['data'=>$data]);
		}
	}
	public function about(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.about');
		}else{
			return view('web.mobile.about');
		}
	}
	public function address(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.address');
		}else{
			return view('web.mobile.address');
		}
	}
	public function search(Request $request){
		$posts = Post::where('post_name','like','%'.$request->input('keyword').'%')->where('post_status',1)->paginate(10);
		$data['posts'] = $posts;
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.search');
		}else{
			return view('web.mobile.search');
		}
	}
	public function sitemap(Request $request){
		$posts = Post::where('post_status',1)->get();
		$terms = Term::get();
		$data['posts'] = $posts;
		$data['terms'] = $terms;
		$content = View::make('web.desktop.sitemap',['data'=>$data]);
		return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
	}
}