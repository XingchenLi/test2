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
                                    <span class="pull-right text-muted small"><em>{{date('m/d/Y', strtotime($product->created_at))}}</em>
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
                                <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-envelope fa-fw"></i>Message Sent
                                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>New Task
                                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                            </a>

                            <a href="#" class="list-group-item">
                                <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                <span class="pull-right text-muted small"><em>9:49 AM</em>
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
                                    <span class="pull-right text-muted small"><em>{{date('m/d/Y', strtotime($product->created_at))}}</em>
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
