<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class Login extends Controller
{
    public function index(){
        return view('/login');
    }

    public function checkUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $req = new LoginModel;
        $values = $req->where('email',$email)->where('password',md5($password))->first();

        if ($values != null) {
            $request->session()->put('user',$values);

            // Compte Client
            if ($values->permission == 0) {
                $request->session()->put('security',"userPermission");
                return redirect('/')->with('msg', 'Bienvenue dans le site eCommerce');
            }

            // Compte Admin
            elseif ($values->permission == 1) {
                $request->session()->put('security',$values->permission);
                return redirect('/adminHome')->with('msg', 'Bienvenue dans le site eCommerce');
            }
        }
        else{
            return redirect('/login')->with('error', 'Votre Email ou mot de passe est incorrect');
        }

    }

    // CREATE ACCOUNT FONCTION

    public function createAccount(){
        return view('/create_account');
    }

    public function createAccount_post(Request $request){

        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = $request->email;
        $nvPassword = $request->nvPassword;
        $cfPassword = $request->cfPassword;

        if ($nvPassword == $cfPassword) {
            $create = new LoginModel;

            $create->lastName = $nom;
            $create->firstName = $prenom;
            $create->email = $email;
            $create->password = md5($nvPassword);

            $created = $create->save();

            if ($created) {
                return redirect('/login')->with("msg","Votre compte est enregistrer avec succés");
            }

        }
        else {
            return redirect('/createAccount')->with("error","Votre mot de passe n'est pas compatible");
        }

    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->forget('security');

        return redirect('/login');
    }
}
