<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\User;
class UserController extends Controller
{
    //
    //
    public function test(){
        $data = User::all();

        return view('welcome',compact('data'));
    }

    public function add(){
        $data = new User;
        $data->username = "Chris";
        $data->password = bcrypt("12345");
        $data->email = "sdads@gmail.com";
        $data->save();

        return "Success";
    }

     public function add2(){
        $data = new User;
        $data->username = "XuanTruong";
        $data->password = bcrypt("12345");
        $data->email = "xuantruong@gmail.com";
        $data->save();

        return "Success";
    }
}
