<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ProductController extends Controller
{
    public function createProduct(Request $request){

        $product = new product();
        $user = Auth::user();
        $product->investor_id = $user->id;
        $product->product_name = $request['product_name'];
        $product->product_return_rate = $request['product_returnRate'];
        $product->product_number = $request['product_number'];
        $product->product_info = $request['product_intro'];
        $product->save();
        //Update User Relationship
        // $product_new= Product::where('investor_id' , $user->id)->last();
        $product_id = $product->id;
        $user->product()->attach($product_id);

        return redirect()->route('investorProducts');
    }


    public function clientGetProduct(){
        $user = Auth::user();
       $products = $user->product;
        return view('productRank' , ['products' => $products]);

    }

    public function investorGetProduct(){
        $user = Auth::user();
        //$products = Product::find();

        $products = $user->product;

        return view('product' , ['products' => $products]);
    }

    public function getAllProducts(){
        $products = Product::all();
        $user = Auth::user();
        if($user->role_id == '2' || $user->role_id == '1' || $user->role_id = '3'){
            return view('product' , ['products' => $products]);
        }
        return view('productRank' , ['products' => $products]);
    }

    public function deleteProduct( $product_id){
        $product = product::where('id' , $product_id)->first();
        $product->delete();
        return redirect()->route('investorProducts');
    }

    public function rankProduct(){
        $products = Product::orderBy('product_return_rate' ,'desc')->take(10)->get();
        $user = Auth::user();
        if($user->role_id == '2' || $user->role_id == '1' || $user->role_id = '3'){
            return view('product' , ['products' => $products]);
        }
        return view('productRank' , ['products' => $products]);


    }

    public function reviewProduct(){

    }

    public function monthlyEarn(){
        return view('monthlyEarn');
    }

}
