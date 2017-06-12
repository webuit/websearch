<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
	 // Test
    public function getTest()
    {
        return view('test');
    }
	// Form đăng ký
    public function getRegisterForm()
    {
    	return view('login.register');
    }

    // Xử lý đăng ký
    public function postProcessRegister(Request $request)
    {
        // Validate
        $this->validate($request,
            [
                'name' => 'required|min:3|max:50',

                'email' => 'required|unique:users,email',

                'password' => 'required|min:6|max:50',

                'confirm_password' => 'required|same:password'
            ],
            [
                'name.required' => 'Bạn chưa nhập họ và tên',
                'name.min' => 'Họ và Tên phải ít nhất là 3 ký tự',
                'name.max' => 'Họ và Tên phải không vượt quá 50 ký tự',

                'email.required' => 'Bạn chưa nhập địa chỉ Email',
                'email.unique' => 'Địa chỉ Email này đã tồn tại',

                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Độ dài mật khẩu phải trên 6 ký tự',

                'confirm_password.required' => 'Bạn chưa nhập lại mật khẩu',
                'confirm_password.same' => 'Nhập lại mật khẩu không chính xac.'

            ]);
        // Xử lý
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 0;
        $user->save();

        return redirect('register_form')->with('register_notice', 'Chúc mừng! Bạn đã đăng ký thành công');
    }

    // Form đăng nhập
    public function getLoginForm()
    {
    	return view('login.login');
    }

    // Xử lý đăng nhập
    public function postProcessLogin(Request $request)
    {
        $this->validate($request, 
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Bạn chưa nhập địa chỉ email',
                'password.required' => 'Bạn chưa nhập mật khẩu',
            ]
        );
        $email = $request->email;
        $password = $request->password;
        if( Auth::attempt(['email'=>$email, 'password'=>$password]) )
        {
            return redirect('index');
        }
        else
        {
           return redirect('login_form')->with('error_login', 'Địa chỉ email hoặc mật khẩu không đúng!'); 
        }
    }

    // Đăng xuất
    public function getLogout()
    {
        Auth::logout();
        return redirect('login_form');
    }

    // Quản lý danh sách user account
    public function getListUser()
    {
        // role: 0 = user, 1=admin
        $user = User::all();
        return view('user.list_user', ['user'=>$user]);
    }

    // xử lý thay đổi quyền user
    public function getChangeRole($a)
    {
        dd($a);
    }
}
