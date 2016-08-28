@extends('layouts.product')


@section('content')
    <div class="col-md-10">

        <!--    Striped Rows Table  -->
        <div class="panel panel-default">
            <div class="panel-heading">
                我的产品
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>产品名</th>
                            <th>收益率</th>
                            <th>产品编号</th>
                            <th>创建时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($article as $articles)
                            <tr>
                                <td>{{$articles->title}}</td>
                                <td>{{$articles->liked}} %</td>
                                <td>{{date('m/d/Y', strtotime($articles->created_at))}}</td>
                                <td><button type="button" class="btn btn-info">查看</button></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--  End  Striped Rows Table  -->
    </div>




@endsection