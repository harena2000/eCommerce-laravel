<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CardModel;
use Illuminate\Http\Request;
use DB;

class Card extends Controller
{
    public function index(){

        if (session()->get("security") != "userPermission") {
            return redirect('/login')->with('msg', 'Connectez vous avant de visiter le site');
        }
        else {

            $product = new CardModel;
            $result = $product->join("products", "products.id", "=", "card.idProduct")
                            ->where("card.idUser",session()->get("user")->idUser)
                            ->where("validation","=",0)
                            ->get();

            return view("Client.cardList",['product' => $result]);

        }

    }

    public function validCard(){

        if (session()->get("security") != "userPermission") {
            return redirect('/login')->with('msg', 'Connectez vous avant de visiter le site');
        }
        else {

            $product = new CardModel;
            $result = $product->join("products", "products.id", "=", "card.idProduct")
                            ->where("card.idUser",session()->get("user")->idUser)
                            ->where("validation","=",1)
                            ->get();

            return view("Client.cardList",['product' => $result]);

        }

    }
}
