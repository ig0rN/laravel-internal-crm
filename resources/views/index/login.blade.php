@extends('index.master')

@section('title', 'MPSOFT Database')

@section('startBodyWithContent')
<body id="login">

<div class="header">
    <div class="heading">
        <h1 class="display-4">Welcome to the MP SOFT Database. Please sign in.</h1>
    </div>
</div>
@include('flash')
<div class="sign-in">
    <div class="form">

        <img style="text-align:center;" src="{{ asset('img/logo.png') }}" alt="">
        <br>
        <form method="POST" action="/" class="container">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <label></label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <label></label>
                    <input type="password" name="password" class="form-control" placeholder="Password" >

                </div>
            </div>
            <br>
            <div class="row justify-content-left">
                <div class="col-md-8">
                    <label class="form-check-label">
                        <input class="form-check-input" name="remember" type="checkbox" value="">
                        Remember me
                    </label>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <button class="login-button" type="submit">Log in</button>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection