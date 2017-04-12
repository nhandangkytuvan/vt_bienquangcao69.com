<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Term;
use App\Events\VisitTermEvent;
use BrowserDetect;
class TermController extends Controller{
    public function show($term_alias,$term_id,Request $request){
        $term = Term::find($term_id);
        if(!$term){
            return redirect('/');
        }
        // event view term active
        event(new VisitTermEvent($term));
        // -----------
        $data['term'] = $term;
        if(BrowserDetect::isDesktop()){
            switch ($term_id) {
                case 12:
                    return view('web.desktop.new',['data'=>$data]); 
                    break;
                case 13:
                    return view('web.desktop.new',['data'=>$data]); 
                    break;
                case 14:
                    return view('web.desktop.new',['data'=>$data]); 
                    break;
                case 15:
                    return view('web.desktop.new',['data'=>$data]); 
                    break;
                default:
                    return view('web.desktop.product',['data'=>$data]); 
                    break;
            }
        }else{
            switch ($term_id) {
                case 12:
                    return view('web.mobile.new',['data'=>$data]);
                    break;
                case 13:
                    return view('web.mobile.new',['data'=>$data]);
                    break;
                case 14:
                    return view('web.mobile.new',['data'=>$data]); 
                    break;
                case 15:
                    return view('web.mobile.new',['data'=>$data]); 
                    break;
                default:
                    return view('web.mobile.product',['data'=>$data]);  
                    break;
            }
        }
    }
}