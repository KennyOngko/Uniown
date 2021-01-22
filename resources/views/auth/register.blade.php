<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
    html{
        background-color: #E5E5E5;
    }
    .deco{
        background-color: #E5E5E5;
    }
    .setting-a{
        text-decoration: none;
        font-size: 20pt;
        color: black;
        font-weight: bold;
    }
    .setting-a:hover{
        text-decoration:none;
    }
    .btn{
        width: 130px;
    }
    .title{
        padding-bottom: 20px;
    }
    .content{
        padding-left: 23px;
        padding-right: 23px;
        padding-bottom: 50px;
    }
    .asset-tree{
        position: absolute;
        top: -30%;
        left: 7%;
    }
    .asset-people3{
        position: absolute;
        top: 65%;
        left: 40%;
    }
    </style>

  </head>
  <body>

  <div class="deco">
@extends('layouts.app')

<div class="asset-tree">
<img src="asset/plant1.png" style="width: 1500px">
</div>

@section('content')
<div style="height: 800px">
    <div class="container" style="padding-left: 220px">
        <div class="row justify-content-center">
            <div class="col-md-8 shadow p-3 mb-5">
                <div class="card">
                    <div class="deco">
                    <a href="/" class="setting-a">X</a>
                    </div>

                    <div class="card-body deco">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="title content">
                            <h3><b>Register your account<b></h3>
                            </div>

                            <div class="form-group row content">
                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror col" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus placeholder="First Name">

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="name" autofocus placeholder="Last Name">

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row content">

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row content">

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row content">

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-group row mb-4 content">
                                <div class="col-md-4 offset-md-0">
                                    <button type="submit" class="btn btn-primary btn">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="asset-people3">
    <img src="asset/orang3.png" style="width: 800px"></img>
    </div>
</div>
</div>
@endsection


</body>
</html>