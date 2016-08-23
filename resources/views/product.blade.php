@extends('investor')


@section('content3')
    <div class="col-md-6">
        <h3>输入产品信息</h3>
        <form action="{{route("productInfo")}}" method="post">

            <div class="form-group">
                <label for="product_name"> 产品名称</label>
                <input class = "form-control" type = "text" name = "product_name" id = "product_name">
            </div>
            <div class="form-group">
                <label for="product_info"> 产品收益率(%)</label>
                <input class = "form-control" type = "number" name = "product_returnRate" id = "product_returnRate">
            </div>

            <div class="form-group">
                <label for="product_info"> 产品编号</label>
                <input class = "form-control" type = "text" name = "product_number" id = "product_number">
            </div>


            <div class="form-group">
                <label for="product_intro"> 产品简介</label>
                <textarea name="product_intro" class="form-control" id="product_intro" placeholder="输入产品简介"  rows="10"></textarea>
            </div>


            <button type = "Submit" class = "btn btn-primary">Submit</button>

            <input type = "hidden" name = "_token" value = "{{ Session::token() }}">


        </form>

        <div>
            @foreach($products as $product)

                <div>
                    <div class="list-group">
                        <a href="" class="list-group-item">
                            <h4 class="list-group-item-heading"> 产品名称： {{$product->product_name}}</h4>
                            <p class="list-group-item-text"> 产品回报率 ：{{$product->product_return_rate}} % </p>
                            <p class="list-group-item-text"> 产品编号 ： {{$product->product_number}}</p>
                        </a>
                        <div class="interaction">
                            <a href="#">  like  |</a>
                            <a href="#">  Dislike |</a>
                            <a href="#">  edit | </a>

                            <a href="{{ route('deleteProduct' , ['product_id' => $product->id ]) }}"> Delete </a>

                            <input type = "hidden" name = "_token" value = "{{ Session::token() }}">

                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endsection