<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoginModel;

class AdminHome extends Controller
{
    public function index(){

        if (session()->get("security") != 1) {
            return redirect('/login')->with('msg', 'Connectez vous avant de visiter le site');
        }
        else {

            $users = new LoginModel;
            $result = $users->where('permission','=',0)->get();
            $data = [];

            if (count($result) > 0) {
                $data = $result;
            }

            return view("Admin.userList")->with('user',$data);
        }

    }

}
