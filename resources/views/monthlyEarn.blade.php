@extends('layouts.product')


@section('content')
    <div class="col-md-6">
        <!--    Striped Rows Table  -->
        <div class="panel panel-default">
            <div class="panel-heading">
                月度收益表
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>姓名</th>
                            <th>本月收益</th>
                            <th>上月收益</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>测试1</td>
                            <td>20</td>
                            <td>45</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>测试2</td>
                            <td>76</td>
                            <td>56</td>
                        </tr>
                            <td>3</td>
                            <td>测试3</td>
                            <td>23</td>
                            <td>42</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--  End  Striped Rows Table  -->
    </div>











@endsection