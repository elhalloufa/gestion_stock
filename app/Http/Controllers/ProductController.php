<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //lister les produit
    public function index(){
        $listproduct = Product::all();
        return view('product.index',['produts'=> $listproduct]);

    }
    //afficher le formulaire de creation de produit
    public function create(){
       return view('product.create');
    }
    //enregister un produit
    public function store(Request $request){
       $product = new Product();
       $product->nomproduct = $request->input('nomproduct');
       $product->reference = $request->input('reference');
       $product->description = $request->input('description');
       $product->prix = $request->input('prix');
       $product->picture = $request->input('picture');


       $product->save();
        return redirect('produts');

       //return back();

    }
    //permet de recuperer un produit de le mettre dans un le formulaire
    public function edit($id){
          $produt =Product::find($id);
          return view('product.edit',['product'=>$produt]);

    }
    //permet de modifier un produit
    public function update(Request $request,$id){
        $produt =Product::find($id);
        $produt->nomproduct = $request->input('nomproduct');
        $produt->reference = $request->input('reference');
        $produt->description = $request->input('description');
        $produt->prix = $request->input('prix');


       $produt->save();
        return redirect('produts');


    }
     //permet de supprimer un produit
    public function destroy(Request $request, $id){
        $product = Product::find($id)->first();
        $product->delete();
        return back();
    }

}

