<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Term;
use App\View;
use Session;
use BrowserDetect;
class TermController extends Controller{
    public function show($term_alias,$term_id,Request $request){
    	$setting = Setting::first();
        $term = Term::find($term_id);
        if(!$term){
            return redirect('/');
        }
        // -----------
        if(View::where('term_id',$term_id)->exists()){
            $view = View::where('term_id',$term_id)->first();
        }else{
            $view = new View;
            $view->term_id = $term_id;
        }
        $view->view_sum ++;
        $view->save();
        // -----------
        $data['term'] = $term;
        $data['setting'] = $setting;
        if(BrowserDetect::isDesktop()){
            switch ($term_id) {
                case 33:
                    return view('web.desktop.thietbi',['data'=>$data]); 
                    break;
                case 32:
                    return view('web.desktop.kythuat',['data'=>$data]); 
                    break;
                case 34:
                    return view('web.desktop.hoiphuc',['data'=>$data]); 
                    break;
                default:
                    return view('web.desktop.term',['data'=>$data]); 
                    break;
            }
        }else{
            switch ($term_id) {
                case 33:
                    return view('web.mobile.term',['data'=>$data]);
                    break;
                case 32:
                    return view('web.mobile.kythuat',['data'=>$data]);
                    break;
                case 34:
                    return view('web.mobile.hoiphuc',['data'=>$data]); 
                    break;
                default:
                    return view('web.mobile.term',['data'=>$data]);  
                    break;
            }
        }
    }
}