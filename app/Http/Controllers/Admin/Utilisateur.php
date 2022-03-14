<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LoginModel;
use Illuminate\Http\Request;

class Utilisateur extends Controller
{
    public function index(){

        if (session()->get("security") != 1) {
            return redirect('/login')->with('msg', 'Connectez vous avant de visiter le site');
        }
        else {

            $users = new LoginModel;
            $result = $users->all();
            $data = [];

            if (count($result) > 0) {
                $data = $result;
            }

            return view("Admin.userList")->with('user',$data);
        }

    }
}
