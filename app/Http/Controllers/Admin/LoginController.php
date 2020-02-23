<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('backend.login');
    }
    public function postLogin(Request $re)
    {
    	$arr=['email' => $re->email, 'password' => $re->password];
    	//nho tai khoan
    	if($re->remember=='Remember Me')
    	{
    		$remember=true;
    	}
    	else
    		$remember=false;
    	if(Auth::attempt($arr,$remember))
    	{
    		return redirect()->intended('admin/home');
    	}
    	else
    		return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không đúng');
    }
}
