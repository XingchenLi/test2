<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>投顾宝</title>

    <!-- Fonts -->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">


    <!-- Styles -->
  <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
-->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-responsive.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/sl-slide.css')}}">

    <script src="{{URL::asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{{URL::asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/ico/apple-touch-icon-57-precomposed.png')}}">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">

    <header class="navbar navbar-fixed-top">
        <div class="topbar"></div>
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar">2</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="#" class="pull-left" href="{{ url('/') }}"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="{{ url('/') }}">首页</a></li>
                        <li><a href="{{route('home')}}">产品</a></li>
                        <li><a href="#">关于我们</a></li>
                        <li><a href="{{route('career')}}">加入我们</a></li>

                        <li class="login">

                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">| 登陆</a></li>
                            <li><a href="{{ url('/register') }}">注册</a></li>
                          @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>注销</a></li>
                            </ul>
                        </li>
                    @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
  </header>

    @yield('content')


    <section id="bottom" class="main">
        <!--Container-->
        <div class="container">

            <!--row-fluids-->
            <div class="row-fluid">

                <!--Contact Form-->
                <div class="span3">
                    <h4>ADDRESS</h4>
                    <ul class="unstyled address">
                        <li>
                            <i class="icon-home"></i><strong>地址:</strong> 大学西路110号，丰业大厦<br>内蒙古呼和浩特 010010
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <strong>电子邮箱: </strong> tougubao@tougubao.net.cn
                        </li>
                        <li>
                            <i class="icon-globe"></i>
                            <strong>网站:</strong> www.tougubao.net.cn
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <strong>联系电话:</strong> 15847777107
                        </li>
                    </ul>
                </div>
                <!--End Contact Form-->

                <!--Important Links-->
                <div id="tweets" class="span3">
                    <h4>关于投顾宝</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">关于我们</a></li>
                            <li><a href="#">加入我们</a></li>
                            <li><a href="#">相关企业</a></li>
                            <li><a href="#">联系我们</a></li>
                        </ul>
                    </div>
                </div>
                <!--Important Links-->

                <!--Archives-->
                <div id="archives" class="span3">
                    <h4>相关企业</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">蓝鲸文化公社</a></li>

                        </ul>
                    </div>
                </div>
                <!--End Archives-->

                <div class="span3">
                    <h4>合作伙伴</h4>
                    <div class="row-fluid first">
                        <ul class="thumbnails">
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="row-fluid">
                        <ul class="thumbnails">
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <!--/row-fluid-->
        </div>
        <!--/container-->

    </section>
    <!--/bottom-->


    <footer id="footer">
        <div class="container">
            <div class="row-fluid">
                <div class="span5 cp">
                    2016 <a target="_blank" href="http://shapebootstrap.net/" title="投顾宝">内蒙古投顾宝互联网信息服务有限公司版权所有</a>.  ©蒙ICP备16000297-1.
                </div>
                <!--/Copyright-->



            </div>
        </div>
    </footer>



    <!-- JavaScripts -->
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
-->
    <script src="{{URL::asset('js/vendor/jquery-1.9.1.min.js')}}"></script>
    <script src="{{URL::asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    <!-- Required javascript files for Slider -->
    <script src="{{URL::asset('js/jquery.ba-cond.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.slitslider.js')}}"></script>
    <!-- /Required javascript files for Slider -->

    <!-- SL Slider -->
    <script type="text/javascript">
        $(function() {
            var Page = (function() {

                var $navArrows = $( '#nav-arrows' ),
                        slitslider = $( '#slider' ).slitslider( {
                            autoplay : true
                        } ),

                        init = function() {
                            initEvents();
                        },
                        initEvents = function() {
                            $navArrows.children( ':last' ).on( 'click', function() {
                                slitslider.next();
                                return false;
                            });

                            $navArrows.children( ':first' ).on( 'click', function() {
                                slitslider.previous();
                                return false;
                            });
                        };

                return { init : init };

            })();

            Page.init();
        });
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
