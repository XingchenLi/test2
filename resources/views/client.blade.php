@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">管理台</div>

                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" class="active"><a href="{{route('home')}}">Home <span class="badge">42</span></a></li>
                        <li role="presentation"><a href="#"> 我的投顾</a></li>
                        <li role="presentation"><a href="{{ route('myproduct') }}"> 我的产品 <span class="badge">3</span></a></li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        查看排名  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> 投顾排名 </a></li>
                                <li><a href="{{route('rankedProduct')}}">产品收益排名</a></li>
                                <li><a href="#">机构排名</a></li>

                            </ul>
                        </li>

                        <li role="presentation"><a href="#">站内信息 <span class="badge">3</span></a></li>

                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                我的账户  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">

                                <li><a href="{{ route('changePassword') }}">更改密码</a></li>
                                <li><a href="#">更改账户信息</a></li>
                                <li><a href="{{ route('applyIvestor') }}">申请成为经纪人</a></li>
                                <li><a href="{{ route('investor') }}">登陆投顾帐号</a></li>


                            </ul>
                        </li>
                    </ul>

                    <div>
                        @yield('content2')

                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection