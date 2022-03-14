<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class Product extends Controller
{
    public function index(){

        if (session()->get("security") != 1) {
            return redirect('/login')->with('msg', 'Connectez vous avant de visiter le site');
        }
        else {

            $product = new ProductModel;
            $result = $product->all();
            $data = [];

            if (count($result) > 0) {
                $data = $result;
            }

            return view("Admin.productList")->with('product',$data);
        }

    }

    public function addProduct()
    {
        if (session()->get("security") != 1) {
            return redirect('/login')->with('msg', 'Connectez vous avant de visiter le site');
        }
        else {
            return view("Admin.addProduct");
        }

    }

    public function editProduct($id)
    {
        if (session()->get("security") != 1) {
            return redirect('/login')->with('msg', 'Connectez vous avant de visiter le site');
        }
        else {

            $product = new ProductModel;
            $result = $product->where("idProduct",$id)->get();
            $data = [];

            if (count($result) > 0) {
                $data = $result;
            }
            return view("Admin.editProduct")->with("product",$data);
        }
    }

    public function addProduct_post(Request $request)
    {
        $titre = $request->titre;
        $prix = $request->prix;
        $quantite = $request->quantite;
        $description = $request->description;

        $create = new ProductModel;

        $create->productName = $titre;
        $create->price = $prix;
        $create->quantity = $quantite;
        $create->description = $description;

        $created = $create->save();

        if ($created) {
            return redirect('/addProduct')->with('success', 'Le produits est enregistrer avec succés');
        }

    }

    public function editProduct_post(Request $request)
    {
        $idProduit = $request->idProduit;
        $titre = $request->titre;
        $prix = $request->prix;
        $quantite = $request->quantite;
        $description = $request->description;

        $create = new ProductModel;

        $created = $create->where("idProduct",$idProduit)
                    ->update([
                        "productName" => $titre,
                        "price" => $prix,
                        "quantity" => $quantite,
                        "description" => $description
                    ]);

        return redirect('/addProduct')->with('success', "Le produit $titre est Modifier avec succés");

    }

    public function deleteProduct($id)
    {
        $delete = new ProductModel;

        $deleted = $delete->where("idProduct",$id)->delete();

        return redirect('/productList')->with('msg', "Le produit est Supprimer dans la base de donnée");
    }
}
