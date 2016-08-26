@extends('layouts.app')

@section('content')
    <section id="slide-show">
        <div id="slider" class="sl-slider-wrapper">

            <!--Slider Items-->
            <div class="sl-slider">
                <!--Slider Item1-->
                <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="container">
                            <img class="pull-right" src="images/sample/slider/img1.png" alt="" />
                            <h2>更全</h2>
                            <h3 class="gap">我们有更全面的产品</h3>
                            <a class="btn btn-large btn-transparent" href="#">试用产品</a>
                        </div>
                    </div>
                </div>
                <!--/Slider Item1-->

                <!--Slider Item2-->
                <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div class="container">
                            <img class="pull-right" src="images/sample/slider/img2.png" alt="" />
                            <h2>更快</h2>
                            <h3 class="gap">告别线下营业厅 我们更快</h3>
                            <a class="btn btn-large btn-transparent" href="#">试用产品</a>
                        </div>
                    </div>
                </div>
                <!--Slider Item2-->

                <!--Slider Item3-->
                <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="container">
                            <img class="pull-right" src="images/sample/slider/img3.png" alt="" />
                            <h2>更省</h2>
                            <h3 class="gap">用投顾宝 我们送你产品</h3>
                            <a class="btn btn-large btn-transparent" href="#">试用产品</a>
                        </div>
                    </div>
                </div>
                <!--Slider Item3-->

            </div>
            <!--/Slider Items-->

            <!--Slider Next Prev button-->
            <nav id="nav-arrows" class="nav-arrows">
                <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
                <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
            </nav>
            <!--/Slider Next Prev button-->

        </div>
        <!-- /slider-wrapper -->
    </section>

    <section class="services">
        <h4 class="center">对于客户</h4>
        <div class="container">

            <div class="row-fluid">
                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-bar-chart icon-large"></i>
                        <p> </p>
                        <h4>我们有更多的产品</h4>
                        <p>投顾宝有更多的产品，看一家能看全天下</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-phone icon-large"></i>
                        <p> </p>
                        <h4>使用互联网更快</h4>
                        <p>告别一家一家营业厅的辛劳，线上购买 24小时服务</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-heart icon-large"></i>
                        <p> </p>
                        <h4>选择更优的产品</h4>
                        <p>不用自己慢慢的比较，不用为自己的投资担惊受怕。投顾宝为您精挑细算，为您领路护航</p>
                    </div>
                </div>

            </div>

            <hr>
            <div> <h4 class="center">对于机构</h4></div>

            <div class="row-fluid">
                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-globe icon-large"></i>
                        <p> </p>
                        <h4>互联网推广</h4>
                        <p>使用互联网推广方案为机构全方位的进行互联网推广</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-usd icon-large"></i>
                        <p> </p>
                        <h4>帐户导流</h4>
                        <p> 投顾宝利用丰富的客户资源，对机构进行产品导流</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="center">
                        <i style="font-size: 48px" class="icon-lock icon-large"></i>
                        <p> </p>
                        <h4>安全可靠</h4>
                        <p> 网站产品深加密，客户信息不愁丢失</p>
                    </div>
                </div>

            </div>

            <hr>


            <p>&nbsp;</p>

        </div>
    </section>

@endsection
