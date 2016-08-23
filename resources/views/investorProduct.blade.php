@extends('investor')


@section('content3')
    <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="...">
            <button type="button" class="btn btn-default"> 全部产品 </button>
            <button type="button" class="btn btn-default"> 收益排名 </button>
        </div>
        <div>
            @foreach($products as $product)

                <div>

                    <div class="list-group">
                        <a href="" class="list-group-item">
                            <h4 class="list-group-item-heading"> 产品名称： {{$product->product_name}}</h4>
                            <p class="list-group-item-text"> 产品回报率 ：{{$product->product_return_rate }} % </p>
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