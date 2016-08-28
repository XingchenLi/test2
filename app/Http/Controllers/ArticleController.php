php <?php
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
        $article->posterId = $user->id;
        $article->title = $request['title'];
        // type 1 is an article type 2 is an comment
        if($user->role_id == 3){
            $article->type = 1;
        }
        else{
            $article->type = 2;
        }
        $article->article = $request['article'];
        // default like num is 0
        $article->liked = 0;
        $article->save();
        return redirect()->route('myarticle');
    }


    public function getAllArticle(){
        $article = Article::all();
        return view('investorPov' , ['article' => $article]);

    }

    public function getMyArticle(){
        $user = Auth::user();
        $article = Article::where('posterId', $user->id)->get();
        return view('investorPov' , ['article' => $article]);

    }

    public function getRankedArticle(){
        $article = Article::orderBy('liked')->take(10)->get();
        return view('investorPov' , ['article' => $article]);
    }

    public function deleteArticle( $article_id){
        $article = Article::where('id' , $article_id)->first();
        $article->delete();
        return view('investorPov');

    }


    public function likeArticle( $article_id){
        $article = Article::where('id' , $article_id)->first();
        $article_num = $article->liked;
        $article->liked = $article_num +1 ;
        $article->save();
        return view('investorPov',['article' => Article::all()]);

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