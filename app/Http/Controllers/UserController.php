<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Users;
use App\Status;
use App\Comment;
use App\Ptraffic;

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
        $comment = Comment::all();
        $author = Users::all();

        return view('users.index.home',['status'=>$db,'author'=>$author,'comment'=>$comment]);

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
    public function PostComment($idstt, $content)
    {
        $db = new Comment;
        $db->author = session('iduser');
        $db->content = $content;
        $db->idstt = $idstt;
        $db->time = date('d-m-Y H:i:s');
        $db->save();

        $user = Users::where('id',session('iduser'));
        //return view('users.index.comment');
        $comment = "
        <div class='row mt-2 pr-3'>
        <div class='col-2 pr-1'>
            <img src='img/avatar.png' class='img-thumbnail w-90 rounded'>
        </div>
        <div class='col-10 pr-4 w-100 pb-1 bg-light border rounded  comment-content'>
            <div class='row justify-content-between'>
                <div class='col-10 col-sm-10 col-lg-11'>
                    <a href='' class='name-in-comment'>XUAN TRUONG </a>:
                    <span class='text-secondary time-of-comment'> 1 giờ trước <i class='fa fa-clock-o'></i></span>
                </div>
                <div class='col-1 col-sm-1 col-lg-1 align-self-end'>
                    <i class='fa fa-ellipsis-h align-middle'></i>
                </div>
            </div>

            <div class='row'>
                <div class='col-12 text-justify pr-2'>
                    <span>".$db->content."</span>
                </div>
            </div>

        </div>
    </div>
        ";
        return $comment;
    }
    //Trang xem ban do
    public function ViewMap()
    {
        $pingtraffic = Ptraffic::all();
        return view('users.index.map',['pingtraffic'=>$pingtraffic]);
    }
    // Ping ket xe
    public function PingTraffic($lat,$lon)
    {
        $db = new Ptraffic;
        $db->lat = $lat;
        $db->lon = $lon;
        $db->user = session('iduser');
        $db->save();

        return "Cám ơn bạn đã thông báo tình hình giao thông!";
    }
    // Trang tra cuu tuyen xe buyt
    public function BusSearch()
    {
        return view('users.bus.bussearch');
    }
}
