<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <style>

    .content-1-logo-answer{
        width: 226px;
        height: 180px;
        margin-left: 634px;
    }
    
    .content-1-support{
        width: 561px;
        height: 51px;
        margin-left: 520px;
        margin-top: 30px;

        font-family: Sanchez;
        font-style: normal;
        font-weight: normal;
        font-size: 68px;
        line-height: 31px;
        color: #337093;
    }

    .content-question{
        font-family: Sanchez;
        text-align: justify;
    }

    .content-answer{
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        text-align: justify;
    }

    .content-setup-answer{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 60%;
    }

    .content-image1-answer{
        width: 10%;
        padding-left: 10%;
    }

    .content-image2-answer{
       width: 10%;
       padding-right: 10%;
    }

    </style>

</head>
<body style="background-color:#ffff;">
@extends('layouts.app')

@section('content')
<hr style="border:1px solid black">
<img src="/asset/logo-besar.png" class="content-1-logo-answer">
<div class="content-1-support">UniOwn Support</div>
    @foreach($Support as $sup)
    <center>
    <div class="card w-75 content-setup-answer">
    <div class="card-body content-setup-answer">
        <h5 class="card-title content-question">Q: {{$sup->question}}</h5>
        <p class="card-text content-answer">A: {{$sup->answer}}</p>
    </div>
    </div>
    </center>
    @endforeach
    <!-- <img src="asset/support2.png" class="content-image2-answer"> -->
    <div class="card-group justify-content-center">
    {{$Support->links()}}
    </div>


@endsection
</body>
</html>