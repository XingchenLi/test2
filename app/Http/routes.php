<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(
    ['middleware' => 'web'] , function (){
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', [
        'as' => 'home',
        'uses' => 'HomeController@index'
    ]);

    Route::get('/investor', [
        'uses' => 'UserController@getInvestor',
        'as' => 'investor'
    ]);

    Route::get('/client' , [
        'as' => 'client',
        'uses' => 'UserController@getClient'
    ]);

    Route::get('/investorProducts', [
        'as' => 'investorProducts',
        'uses' => 'ProductController@investorGetProduct']);

    Route::post('/uploadproduct',[
        'as' => 'productInfo',
        'uses' => 'ProductController@createProduct']);


    Route::get('/deleteproduct/{product_id}' , [
        'uses' => 'ProductController@deleteProduct',
         'as' => 'deleteProduct'
    ]);
    Route::get('/deleteArticle/{article_id}' , [
        'uses' => 'ArticleController@deleteArticle',
        'as' => 'deleteArticle'
    ]);
    Route::get('/likedArticle/{article_id}', [
        'uses' => 'ArticleController@likeArticle',
        'as' => 'likeArticle'

        ]);

    Route::get('/changePassword', [
        'as' => 'changePassword',
        function(){
        echo "change password";
        }
    ]);

    Route::post('/updatePassword',[
        'as' =>'updatePassword',
        'uses' => 'UserController@changePassword'
    ]);
    Route::get('/getLogin' , [
        'as' => 'getlogin',
        function(){
        return view('loginFront');
        }
    ]);


    Route::get('access' ,[
        'middleware' => ['auth', 'roles'],
        'uses' => 'UserController@haveAccess',
        'roles' => ['admin' ,'Investor'] // only administrator or a manager can access this route
    ]);
    Route::get('/myproduct' ,[
        'uses' => 'ProductController@getMyProduct',
         'as' => 'myproduct'
    ]);

    Route::get('/applyinvestor', [
        'as' => 'applyIvestor',
        function(){
        return view('applyInvestor');
        }
    ]);

    Route::get('/myarticle' ,[
        'as' => 'myarticle',
        'uses' => 'ArticleController@getMyArticle'

    ]);

    Route::post('uploadArticle' , [
        'as' => 'uploadArticle',
        'uses' => 'ArticleController@createArticle'
    ]);

    Route::get('monthlyEarn' , [
        'as' => 'monthlyEarn',
        'uses' => 'ProductController@monthlyEarn'
    ]);

    Route::get('investorShow' , [
        'as' => 'investorShow',
        function(){
        return view('investorShow');
        }
    ]);

    Route::get('allProducts' , [
        'as' => 'allProducts',
        'uses' => 'ProductController@getAllProducts'
    ]);

    Route::get('rankedProduct',[
       'as' => 'rankedProduct',
        'uses' => 'ProductController@rankProduct'
    ]);

    Route::get('aboutus' ,[
        'as' => 'aboutus',
        function(){
        return view('aboutus');
        }
    ]);

    Route::get('career' ,[
        'as' => 'career',
        function(){
            return view('career');
        }
    ]);

    Route::get('uploadProduct',[
        'as' => 'uploadProduct',
        function(){
        return view('productInput');
        }
    ]);






}
);