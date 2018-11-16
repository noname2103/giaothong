<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Users;
use App\Status;
use App\Comment;

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
            session()->put('iduser',$login->id);
            session()->put('email',$login->email);
    		session()->put('password',$login->password);
    		return redirect()->route('ViewHome');
        }
        // Neu chua co thi tro lai thong bao cho view login
        else
            return redirect()->route('ViewHome',['error'=>'Tài khoản hoặc mật khẩu không đúng!']);
            
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

        return redirect()->route('ViewHome');
    }
    //Trang chu qua website
    public function ViewHome()
    {
        $db = Status::all();
        $author = Users::all();

        return view('users.index.home',['status'=>$db,'author'=>$author]);

    }
    //Dang xuat tai khoan
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('ViewHome');
    }
    //Dang tai mot bai viet len newfeed
    public function upstt(Request $request)
    {
        if($request->hasFile('imagestatus'))
        {
            $imagestatus = $request->file('imagestatus')->getClientOriginalName();
            $request->file('imagestatus')->move('img',$imagestatus);
        }
        else
        {
                $imagestatus = "";
        }
        if($request->lat != '' && $request->lon != '')
        {
            $lat = $request->lat;
            $lon = $request->lon;
        }
        else
        {
            $lat = "";
            $lon = "";
        }

        $content = $request->contentstt;

        $db = new Status;
        $db->content = $content;
        $db->images = $imagestatus;
        $db->lat = $lat;
        $db->lon = $lon;
        $db->author = session('iduser');
        $db->time = date('d-m-Y H:i:s');

        $db->save();
        return redirect()->route('ViewHome');
    }
    //Dang tai mot comment vao bai viet
    public function PostComment($IdStatus)
    {
        return view('users.index.comment');
    }
}
