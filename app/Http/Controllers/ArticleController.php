<?php
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Class_;


class ArticleController extends Controller{
    public function createArticle(Request $request){

        $article = new Article();
        $user = Auth::user();
        //echo $user;
        $article->posterId = $user->id;        //$request['posterId'];
        $article->type = $request['title'];
        $article->article = $request['article'];
        $article->save();
        return redirect()->route('myarticle');
    }


    public function getAllArticle(){
        $article = Article::all();
        return view('investorPov' , ['article' => $article]);

    }

    public function getInvestorArticle(){


    }
/**
    public function deleteProduct( $product_id){
        $product = product::where('id' , $product_id)->first();
        echo "I find product ".$product->id;
        $product->delete();
        return redirect()->route('inputInfo');
    }

    public function rankProduct(){

    }

    public function reviewProduct(){

    }


**/


}