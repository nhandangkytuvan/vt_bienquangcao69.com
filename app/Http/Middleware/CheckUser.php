<?php

namespace App\Http\Middleware;
use Closure;
use App\User;
use Session;
use Response;
use Config;
class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Session::has('user')){
            if($request->ajax()){
                $html='Bạn chưa đăng nhập';
                $response = Response::make($html, 200);
                $response->header('Content-Type', 'application/json');
                return $response;
            }else{
                Session::flash('error','Thông báo: Bạn chưa đăng nhập !');
                return back();
            }
        }
        //if(Session::get('user')->user_group=='bien-tap'){
            // $my_groups = Config::get('groups');
            // if(isset($my_groups[$user->user_group])){
            //     $request->only($my_groups[$user->user_group]['web']);
            //     $request->only($my_groups[$user->user_group]['term']);
            // }
        //}
        return $next($request);
    }
}
