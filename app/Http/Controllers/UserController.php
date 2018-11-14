<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Users;

class UserController extends Controller
{
    //Giao dien trang dang nhap
    public function ViewLogin()
    {
        return view('users.login');
    }
    //Xu ly thong tin dang nhap cua nguoi dung
    public function PostLogin(Request $request)
    {
        //Gan du lieu dang nhap cho bien
        $email = $request->email;
        $password = $request->password;
        
        //Kiem tra co tai khoan trong csdl chua
        $login = Users::where([
    		['email','=',$email],
    		['password','=',$password],
            ])->first();
        
        //Neu co roi thi tao session va den trang index
        if(!empty($login))
        {
            session()->put('mathanhvien',$member->mathanhvien);
            session()->put('anhdaidien',$member->anhdaidien);
    		session()->put('tenthanhvien',$member->tenthanhvien);
    		return redirect()->route('test');
        }
        // Neu chua co thi tro lai thong bao cho view login
        else
            return redirect()->route('ViewLogin',['error'=>'Tài khoản hoặc mật khẩu không đúng!']);
            
        // if(Auth::attempt(['username'=>$username,'password'=>$password]))
        //     return view('users.layout.navbar');
        // else
        // {
        //     //echo $username." ".$password;
        //     echo "fail e";
        // } 
        
    }
    //Giao dien trang dang ky
    public function ViewRegister()
    {
        return view('users.register');
    }
    //Xu ly thong tin dang ky cua nguoi dung
    public function PostRegister(Request $request)
    {
        //Truyen tham so vao cac bien
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;

        //Them vao co so du lieu
        $db = new Users;
        $db->username = $username;
        $db->email = $email;
        $db->password = $password;
        $db->save();

        return redirect()->route('ViewLogin');
    }
    //Trang chu qua website
    public function ViewHome()
    {
        return view('users.index.home');
    }
}
