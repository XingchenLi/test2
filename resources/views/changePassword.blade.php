@extends('layouts.app')


@section('content')
    <div class="col-md-6">
        <h3>Please Input New Password</h3>
        <form action="{{ route('updatePassword') }}" method="post">
            <div class="form-group">
                <label for="Password"> New Password</label>
                <input class = "form-control" type = "password" name = "password" id = "password">
            </div>
            <div class="form-group">
                <label for="password"> Enter the New Password Again </label>
                <input class = "form-control" type = "password" name = "passwordMatch" id = "passwordMatch">
            </div>
            <button type = "Submit" class = "btn btn-primary">Submit</button>
            <input type = "hidden" name = "_token" value = "{{ Session::token() }}">


        </form>


    </div>




@endsection