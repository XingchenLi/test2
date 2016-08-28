<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>投顾宝1.0</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{URL::asset('css/basic.css')}}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--WIZARD STYLES-->
    <link href="{{URL::asset('css/wizard/normalize.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('css/wizard/wizardMain.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('css/wizard/jquery.steps.css')}}" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/')}}">投顾宝</a>
        </div>

        <div class="header-right">

            <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
            <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
            <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                @if (Auth::guest())
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <a href="{{ url('/login') }}">| 登陆</a>
                                <br />
                                <a href="{{ url('/register') }}">注册</a>
                            </div>
                        </div>
                @else
                    <div class="user-img-div">
                        <img src="assets/img/user.png" class="img-thumbnail" />

                        <div class="inner-text">
                            {{ Auth::user()->name }}
                            <br />
                            <small>Last Login : 2 Weeks Ago </small>
                        </div>
                    </div>
                @endif


                </li>

                @if(Auth::guest())
                    <li>
                        <a href="{{ url('/login') }}"><i class="fa fa-flash "></i>登陆 </a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}"><i class="fa fa-flash "></i>注册 </a>
                    </li>
                    <li>
                        <a href="{{route('allProducts')}}"><i class="fa fa-flash "></i>我们的产品 </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flash "></i>我们的投顾 </a>
                    </li>
                    <li>
                        <a href="{{route('articleDetail')}}"><i class="fa fa-flash "></i>投资知识大讲堂 </a>
                    </li>
                @elseif(Auth::user()->role_id == 4)

                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>我的产品 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('myproduct')}}"><i class="fa fa-coffee"></i>我的产品</a>
                            </li>
                            <li>
                                <a href="{{route('rankedProduct')}}"><i class="fa fa-key "></i>查看产品排行榜</a>
                            </li>
                            <li>
                                <a href="{{route('allProducts')}}"><i class="fa fa-send "></i>全部产品</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>我的投顾 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-coffee"></i>我的投顾</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-key "></i>查看推荐投顾</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-send "></i>产看投顾文章</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flash "></i>投资知识大讲堂 </a>
                    </li>

                @elseif(Auth::user()->role_id == 3)
                    <li>
                        <a href="{{route('investorShow')}}"><i class="fa fa-dashboard "></i>推荐投顾</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>管理账户 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-toggle-on"></i>更改账户密码</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-circle-o "></i>更改账户信息</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>产品 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('myproduct')}}"><i class="fa fa-coffee"></i>我的产品</a>
                            </li>
                            <li>
                                <a href="{{route('uploadProduct')}}"><i class="fa fa-flash "></i>输入产品信息</a>
                            </li>
                            <li>
                                <a href="{{route('rankedProduct')}}"><i class="fa fa-key "></i>查看产品排行榜</a>
                            </li>
                            <li>
                                <a href="{{route('allProducts')}}"><i class="fa fa-send "></i>全部产品</a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>我的投资观点 <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="{{route('myarticle')}}"><i class="fa fa-desktop "></i>发布新观点 </a>
                            </li>
                           <!-- <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i>查看我的观点</a>
                            </li>
                            -->


                        </ul>
                    </li>
                    <li>
                        <a href="{{route('monthlyEarn')}}"><i class="fa fa-anchor "></i>我的收益</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bug "></i>我的客户</a>
                    </li>

                @else
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>等待管理员更改权限 <span class="fa arrow"></span></a>

                    </li>

                @endif

            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->



</body>


<div id="footer-sec">
  <a href="http://www.binarytheme.com/" target="_blank">内蒙古投顾宝互联网信息服务有限公司</a> &copy; 蒙ICP备16000297-1
</div>


<!--/bottom-->





<!-- JavaScripts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
-->
<script src="{{URL::asset('js/jquery-1.10.2.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{URL::asset('js/bootstrap.js')}}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{URL::asset('js/jquery.metisMenu.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{URL::asset('js/custom.js')}}"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->

<!-- WIZARD SCRIPTS -->
<script src="{{URL::asset('js/wizard/modernizr-2.6.2.min.js')}}"></script>
<script src="{{URL::asset('js/wizard/jquery.cookie-1.3.1.js')}}"></script>
<script src="{{URL::asset('js/wizard/jquery.steps.js')}}"></script>

</body>
</html>
