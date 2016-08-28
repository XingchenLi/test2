@extends('layouts.product')


@section('content')

    <div>
        <h3>输入产品页面</h3>
        <form action="#" method="post">

            <div class="form-group">
                <label for="title"> 文章标题</label>
                <input class = "form-control" type = "text" name = "title" id = "title">
            </div>
            <hr>



            <button type = "Submit" class = "btn btn-primary">提交</button>
            <input type = "hidden" name = "_token" value = "{{ Session::token() }}">

        </form>



    </div>




@endsection