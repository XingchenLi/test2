@extends('layouts.product')


@section('content')

   <div>
       <h3>投顾投资观点</h3>
       <form action="{{route('uploadArticle')}}" method="post">

           <div class="form-group">
               <label for="title"> 文章标题</label>
               <input class = "form-control" type = "text" name = "title" id = "title">
           </div>

           <div class="form-group">
               <label for="article"> 我的投资观点</label>
               <textarea name="article" class="form-control" id="article" placeholder="输入文章"  rows="10"></textarea>
           </div>



           <button type = "Submit" class = "btn btn-primary">提交</button>
           <input type = "hidden" name = "_token" value = "{{ Session::token() }}">

       </form>



   </div>


    <div>
        @foreach($article as $articles)
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$articles->title}}</h3>
                    </div>
                    <div class="panel-body">
                        {{ $articles->article }}
                    </div>

                </div>
                <div class="interaction">
                    <a href="{{ route('likeArticle' , ['article_id' => $articles->id ]) }}"> like </a>
                    <a href="#">  Dislike |</a>
                    <a href="#">  edit | </a>

                    <a href="{{ route('deleteArticle' , ['article_id' => $articles->id ]) }}"> Delete </a>

                    <input type = "hidden" name = "_token" value = "{{ Session::token() }}">

                </div>

            </div>




        @endforeach
    </div>


    @endsection