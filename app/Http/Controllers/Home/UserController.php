<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   /**
    * 加载注册页面
    */
   public function getRegister(){
        return view('home.user.register');
   }

}
