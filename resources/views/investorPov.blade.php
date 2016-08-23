@extends('investor')


@section('content3')

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
        @foreach($article as $article)
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$article->type}}</h3>
                    </div>
                    <div class="panel-body">
                        {{ $article->article }}
                    </div>

                </div>

            </div>




        @endforeach
    </div>


    @endsection