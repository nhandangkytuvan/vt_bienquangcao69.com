<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Setting;
use Session;
use Hash;
class UserController extends Controller{
	protected $messages_create = [
	    'username.required' => 'Chúng tôi cần biết username của bạn.',
	    'user_name.required' => 'Chúng tôi cần biết user_name của bạn.',
	    'password.required' => 'Chúng tôi cần biết password của bạn.',
	    'password_confirmation.required' => 'Chúng tôi cần biết password_confirmation của bạn.',
	];
	protected $rules_create = [
        'username' => 'required|unique:user|max:255',
        'user_name' => 'required|max:255',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required|min:6',
    ];
    protected $rules_edit = [
    	'user_name' => 'required',
    	'user_email' => 'required|email',
    ];
    protected $rules_forget = [
        'password_old' => 'required',
        'password_new' => 'required|min:6|confirmed',
        'password_new_confirmation' => 'required|min:6',
    ];
    protected $messages_forget = [
	    'password_old.required' => 'Nhập password cũ của bạn.',
	    'password_new.required' => 'Nhập password mới của bạn.',
	    'password_new_confirmation.required' => 'Nhập lại password mới của bạn.',
	    'password_new.confirmed' => 'Passowrd không khớp.',
	];
	public function create(Request $request){
		if ($request->isMethod('post')) {
			$this->validate($request,$this->rules_create,$this->messages_create);
			$user = new User;
			$user->username = $request->input('username');
			$user->user_name = $request->input('user_name');
			$user->password = Hash::make($request->input('password'));
			$user->user_group = $request->input('user_group');
			if($user->save()){
				Session::flash('success','Đăng ký thành công.');
				return redirect('user/user/index');
			}else{
				Session::flash('error','Đăng ký gặp lỗi.');
				return back();
			}
		}else{
			return view('user.user.create');
		}
	}
	public function logout(Request $request){
		Session::forget('user');
		Session::flash('info','Hẹn gặp lại.');
		return redirect('/');
	}
	public function password(Request $request){
		$user = Session::get('user');
		if ($request->isMethod('post')) {
			$this->validate($request,$this->rules_forget,$this->messages_forget);
			if(Hash::check($request->input('password_old'),$user->password)){
				$user->password = Hash::make($request->input('password_new'));
				$user->save();
				Session::flush();
				Session::flash('info','Đăng nhập lại.');
				return redirect('web/user/login');
			}else{
				Session::flash('info','Password cũ không đúng.');
				return back();
			}
		}else{
			return 'Hi';
		}
	}
	public function edit(Request $request){
		$user = Session::get('user');
		if($request->isMethod('post')){
			$this->validate($request,$this->rules_edit);
			$user->user_name = $request->input('user_name');
			$user->user_email = $request->input('user_email');
			if($request->hasFile('user_avatar')){
                $file = $request->file('user_avatar');
                $extension = $file->extension();
                $user_avatar = str_slug($user->user_name,'-').'-'.time().'.'.$extension;
                $path = $file->move(public_path().'/img',$user_avatar);
                $user->user_avatar = $user_avatar;
            }
            $user->save();
            Session::flash('success','Sửa thông tin thành công.');
            return back();
		}else{
			$data['user'] = $user;
			return view('user.user.edit',['data'=>$data]);
		}
	}
	public function index(Request $request){
		$users = User::orderBy('username');
		if($request->input('user_group')){
			$users = $users->where('user_group',$request->input('user_group'));
		}
		if($request->input('username')){
			$users = $users->where('username',$request->input('username'));
		}
		$users = $users->get();
		$data['users'] = $users;
		$data['request'] = $request;
		return view('user.user.index',['data'=>$data]);
	}
	public function group($user_id,Request $request){
		$user = User::find($user_id);
		if ($request->isMethod('post')) {
			$user->user_group = $request->input('user_group');
			if($user->save()){
				Session::flash('success','Chỉnh sửa thành công.');
				return redirect('user/user/index');
			}else{
				Session::flash('error','Chỉnh sửa lỗi.');
				return back();
			}
		}else{
			$data['user'] = $user;
			return view('user.user.group',['data'=>$data]);
		}
	}
	public function delete($user_id,Request $request){
		$user = User::find($user_id);
		if($request->isMethod('post')){
			if($user->delete()){
				Session::flash('success','Xóa user '.$user->username.' thành công.');
				return redirect('user/user/index');
			}else{
				Session::flash('error','Xóa user '.$user->username.' gặp lỗi.');
				return back();
			}
		}else{
			$data['user'] = $user;
			return view('user.user.delete',['data'=>$data]);
		}
	}
	public function block($user_id,Request $request){
		$user = User::find($user_id);
		if($request->isMethod('post')){
			$user->user_block = 1;
			$user->save();
			Session::flash('success','Khóa thành công.');
			return redirect('user/user/index');
		}else{
			$data['user'] = $user;
			return view('user.user.block',['data'=>$data]);
		}
	}
}