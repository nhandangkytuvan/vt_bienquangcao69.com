<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\User;
use File;
use Session;
class SettingController extends Controller{
    protected $rules = [
        'web_name' => 'required',
        'web_description' => 'required',
        'web_keyword' => 'required',
    ];
    public function create(Request $request){
        if(Setting::exists()){
            return redirect('user/setting/edit/1');
        }
        $user = Session::get('user');
        if($request->isMethod('post')){
            $setting = new Setting;
            $setting->user_id = $user->id;
            foreach ($setting->column as $key => $value) {
                if($request->has($value)){
                    $setting->$value = $request->input($value);
                }
            }
            if($setting->column_avatar){
                foreach ($setting->column_avatar as $key => $value) {
                    if($request->hasFile($value)){
                        $file = $request->file($value);
                        $file_name = time().'.'.$file->extension();
                        $file->move(public_path().'/img',$file_name);
                        $setting->$value = $file_name;
                    }
                }
            }
            $setting->save();
            Session::flash('success','Create thành công.');
            return back();
        }else{
            return view('user.setting.create');
        }
    }
    public function edit($setting_id,Request $request){
        $user = Session::get('user');
        $setting = Setting::find($setting_id);
        if($request->isMethod('post')){
            foreach ($setting->column as $key => $value) {
                if($request->has($value)){
                    $setting->$value = $request->input($value);
                }
            }
            if($setting->column_avatar){
                foreach ($setting->column_avatar as $key => $value) {
                    if($request->hasFile($value)){
                        $file = $request->file($value);
                        $file_name = time().'.'.$file->extension();
                        $file->move(public_path().'/img',$file_name);
                        $setting->$value = $file_name;
                    }
                }
            }
            $setting->save();
            Session::flash('success','Edit thành công.');
            return back();
        }else{
            $data['setting'] = $setting;
            return view('user.setting.edit',['data'=>$data]);
        }
    }
}