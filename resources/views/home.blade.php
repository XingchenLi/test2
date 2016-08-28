@extends('layouts.product')

@section('content')
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">欢迎来到投顾宝</h1>
                <h1 class="page-subhead-line">欢迎使用投顾宝产品，本产品为试用版，并无真实产品数据 </h1>

            </div>
        </div>

        <div class="row">


            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i> 最热产品
                    </div>

                    <div class="panel-body">
                        <div class="list-group">



                                @foreach($passdata[0] as $product)
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i>{{$product->product_name}}
                                    </span>
                                </a>
                                @endforeach



                        </div>
                        <!-- /.list-group -->
                        <a href="#" class="btn btn-info btn-block">查看更多产品信息</a>
                    </div>

                </div>
            </div>


            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i>最热投顾
                    </div>

                    <div class="panel-body">
                        <div class="list-group">

                            <a href="#" class="list-group-item">
                                <i class="fa fa-twitter fa-fw"></i>3 投顾一号
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-envelope fa-fw"></i>投顾二号
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>投顾三号
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>投顾三号
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>投顾三号
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>投顾三号
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>投顾三号
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>投顾三号
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>投顾三号
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>投顾三号
                                    </span>
                            </a>
                        </div>
                        <!-- /.list-group -->
                        <a href="#" class="btn btn-info btn-block"> 查看更多投顾信息 </a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i>最热文章
                    </div>

                    <div class="panel-body">
                        <div class="list-group">

                            @foreach($passdata[1] as $article)
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i>{{$article->title}}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                        <!-- /.list-group -->
                        <a href="#" class="btn btn-info btn-block">查看更多文章</a>
                    </div>

                </div>
            </div>
        </div>
        <!--/.Row-->



    </div>
        <!-- /. PAGE INNER  -->

@endsection
