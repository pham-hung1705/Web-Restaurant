<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getlogin(){
            return view('layouts.singin');
    }
    public function postlogiṇ(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|min:3',
            'password'=>'required|min:8',
            'address'=>'required',
            'phone'=>'required|min:10'
        ],[
            'name.required'=>'Không được để trống tên',
            'email.required'=>'Không được để trống email',
            'email.email'=>'Email không đúng định dạng!',
            'password.required'=>'Không được để trống mật khẩu',
            'password.min'=>'Mật khẩu phải 6 kí tự trở lên!',
            'address.required'=>'Không được để trống địa chỉ',
            'phone.required'=>'Không được để trống số điện thoại',
            'phone.min'=>'Số điện thoại phải 10 số!'

        ]);
    }
}
