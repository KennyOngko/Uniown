<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <style>
        .content-1-img{
            max-width: 700px;
            text-align: center;
        }

        .content-1-title{
            font-weight: bold;
            font-size: 24pt;
            font-family: Sanchez;
            padding-bottom: 20px;
        }

        .content-1-desc{
            font-size: 16pt;
            font-family: Montserrat;
            text-align: justify;
            width: 1000px;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            padding-bottom: 20px;
        }
        </style>
    </head>
    <body>
    @extends('layouts.app')

    @section('content')
    <center>
    <div class="card mb-3">
        <img src="{{asset($News->image)}}" class="card-img-top content-1-img center" alt="...">
        <div class="card-body">
            <h5 class="card-title content-1-title">{{$News->title}}</h5>
            <p class="card-text content-1-desc">{{$News->description}}</p>
            <p class="card-text"><medium class="text-muted">Last updated 29 hours ago</medium></p>
        </div>
    </div>
    </center>

    @endsection
    </body>
</html>