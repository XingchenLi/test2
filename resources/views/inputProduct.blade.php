@extends('layouts.product')


@section('content')

    <div class="col-md-8">
        <h3>输入产品页面</h3>
        <form action="#" method="post">

            <div class="form-group">
                <label for="title"> 产品名称</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <hr>
            <div class="col-md-12">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="title"> 单位净值</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="title"> 涨跌幅</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="title"> 三月涨幅</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="title"> 一年涨幅</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="title"> 三年涨幅</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="title"> 成立日期</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title"> 最新规模</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title"> 管理经理人</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="title"> 累计单位净值</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>
            </div>
            <div class="col-md-4">

                <div class="form-group">
                    <label for="title"> 累计分红</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title"> 基金经理</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>
            </div>
            <hr>
            <hr>
            <div class="form-group">
                <label for="title">基金全称 </label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="title"> 基金简称</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="title"> 基金代码</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="title"> 成立日期</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="title"> 上市日期</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="title"> 存续期限</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="title"> 上市地点</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>


            <button type="Submit" class="btn btn-primary">提交</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">

        </form>


    </div>






@endsection