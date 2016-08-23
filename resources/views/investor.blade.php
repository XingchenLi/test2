@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">控制面板</div>

                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="#">主页 <span class="badge">42</span></a></li>
                        <li role="presentation"><a href="{{route('investorShow')}}">推荐投顾</a></li>
                        <li role="presentation"><a href="{{route('myarticle')}}">我的投资观点 <span class="badge">3</span></a></li>

                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                产品  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('investorProducts')}}"> 我的产品 </a></li>
                                <li><a href="{{route('investorProducts')}}"> 输入产品信息 </a></li>

                                <li role="separator" class="divider"></li>
                                <li><a href="{{Route('allProducts')}}"> 全部产品 </a></li>
                                <li><a href="{{Route('rankedProduct')}}"> 产品排行 </a></li>


                            </ul>
                        </li>


                        <li role="presentation"><a href="{{route( 'monthlyEarn')}}">收益 <span class="badge">3</span></a></li>

                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                我的  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('myproduct')}}"> 我的产品 </a></li>
                                <li><a href="#"> 我的客户 </a></li>

                                <li role="separator" class="divider"></li>


                                <li><a href="#">更改密码</a></li>
                                <li><a href="#">更改我的信息</a></li>

                            </ul>
                        </li>
                    </ul>


                    @yield('content3')


                </div>
            </div>
        </div>
    </div>


@endsection