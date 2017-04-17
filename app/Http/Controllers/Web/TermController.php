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
        $sanpham = Term::find(1);
        $sanpham_ids = $sanpham->children()->pluck('id')->toArray();
        $sanpham_ids[] = 1;
        if(BrowserDetect::isDesktop()){
            if(in_array($term_id, $sanpham_ids)){
                return view('web.desktop.product',['data'=>$data]); 
            }else{
                return view('web.desktop.new',['data'=>$data]); 
            }
        }else{
            if(in_array($term_id, $sanpham_ids)){
                return view('web.mobile.product',['data'=>$data]); 
            }else{
                return view('web.mobile.new',['data'=>$data]); 
            }
        }
    }
}