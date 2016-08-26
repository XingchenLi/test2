<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\product;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('product_return_rate' ,'desc')->take(10)->get();
        $article = Article::orderBy('liked' , 'desc')->take(10)->get();
        $passdata = array($products ,$article);

        return view('home',['passdata' => $passdata]);
    }

}
