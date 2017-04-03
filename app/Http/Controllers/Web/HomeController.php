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
		$setting = Setting::first();
		$data['request'] = $request;
		$data['home'] = true;
		$data['setting'] = $setting;
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.home',['data'=>$data]);
		}else{
			return view('web.mobile.home',['data'=>$data]);
		}
	}
	public function about(Request $request){
		$setting = Setting::first();
		$data['setting'] = $setting;
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.about',['data'=>$data]);
		}else{
			return view('web.mobile.about',['data'=>$data]);
		}
	}
	public function address(Request $request){
		$setting = Setting::first();
		$data['setting'] = $setting;
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.address',['data'=>$data]);
		}else{
			return view('web.mobile.address',['data'=>$data]);
		}
	}
	public function search(Request $request){
		$setting = Setting::first();
		$data['setting'] = $setting;
		$posts = Post::where('post_name','like','%'.$request->input('keyword').'%')->where('post_status',1)->paginate(10);
		$data['posts'] = $posts;
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.search',['data'=>$data]);
		}else{
			return view('web.mobile.search',['data'=>$data]);
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