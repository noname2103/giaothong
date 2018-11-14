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
        $username = $request->username;
        $password = $request->password;

        //echo $username." eeee ".$password;
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
        $db->password = bcrypt($password);
        $db->save();

        return view('users.login');
    }
}
