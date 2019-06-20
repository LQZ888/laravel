@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"> 信息列表 </div>

                <div class="card-body">

                <form  method="POST" action="{{ route('login') }}">
                <button type="submit" class="btn btn-primary" >个人信息</button>
                </form>
                <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    欢迎登陆
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
