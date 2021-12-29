<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class ManageController extends Controller
{
    public  function   login(){
            return  view('Admin.login');
    }

    public  function   submit(Request  $request)
    {
        $validator= Validator::make($request->all(),[
            'username'=>'required|min:2|max:12',
            'password'=>'required|between:4,20',
            'captcha'=>'required|size:5'
        ]);


        if($validator->fails()){


            dd($validator);
        }
        else{
            return \redirect('admin/index');
        }
    }
    public  function  index(){
        return view('Admin.index');
    }

    public  function  welcome(){
        return view('Admin.welcome');
    }
}
