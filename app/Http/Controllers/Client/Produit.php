<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CardModel;

class Produit extends Controller
{
    public function index(){

        if (session()->get("security") != "userPermission" ) {
            return redirect('/login')->with('msg', 'Connectez vous avant de visiter le site');
        }
        else {
            $product = new ProductModel;
            $result = $product->all();

            return view("Client.listeProduit",['product' => $result]);
        }

    }

    public function add_to_card($id)
    {
        if (session()->get("security") != "userPermission") {
            return redirect('/login')->with('msg', 'Connectez vous avant de visiter le site');
        }
        else {

            $product = new ProductModel;
            $result = $product->find($id);

            return view("Client.add_to_Card",["product" => $result]);
        }
    }

    public function add_to_card_post(Request $request)
    {
        $idProduit = $request->idProduit;
        $quantite = $request->quantite;
        $idUser = session()->get("user");

        $create = new CardModel;

        $create->idUser = $idUser->idUser;
        $create->idProduct = $idProduit;
        $create->quantite = $quantite;

        $created = $create->save();

        if ($created) {
            return redirect('/cardList')->with('success', 'Le produits est ajouté dans le panier');
        }
    }
}
