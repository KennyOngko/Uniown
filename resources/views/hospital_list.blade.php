<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <style>
    .content-1-layout{
        width: 100%;
        background: linear-gradient(180deg, #337093 0%, rgba(133, 42, 42, 0.81) 100%);
        border-radius: 0px;
        height: 227px;

    }
    .content-1-layout1{    
        position:absolute;    
        width: 780px;
        height: 192px;
        margin-left: 331px;
        top: 250px;
        background: #FFFFFF;
        border-radius: 30px;
    }
    .content-1-judul{

        width: 561px;
        height: 51px;
        margin-left: 200px;
        margin-top: 50px;

        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-size: 72px;
        line-height: 31px;

        color: #852A2A;

    }
    .content-2-layout{
        width: 300px;
        height: 400px;
        overflow: auto;
        background: url("asset/Box.png");
        margin-top: 100px;
        margin-left:100px;
        background-size: 300px 400px;
        background-repeat: no-repeat;
        border-radius:30px;
    }
    .content-2-judul{
        margin-top:20px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-size: 25px;
        line-height: 31px;
        color: rgba(0, 0, 0, 0.5);
    }
    .content-2-isi{
        width: 122px;
        height: 31px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 31px;
        color: rgba(0, 0, 0, 0.7);
    }
    .content-3-layout{
        width: 900px;
        height: 500px;
        overflow: auto;
        margin-top: 100px;
        margin-left:100px;
        background-size: 300px 400px;
        background-repeat: no-repeat;
        border-radius:30px;

    }
    .content-1-penampung{
        display: flex;
    }
    .content-3-layout1{
        width: 780px;
        height: 130px;
        background: #FFFFFF;
        border: 1px solid #EAEAEA;
        box-sizing: border-box;
        box-shadow: 2px 2px 4px rgba(61, 60, 60, 0.25);
        border-radius: 70px;
        margin-top:30px;
        margin-left:45px;
    }

        </style>
    </head>
    <body style="background-color: white">
    @extends('layouts.app')

    @section('content')
    <div class="content-1-layout">
    <div class="content-1-layout1">
    <div class="content-1-judul">Hospital List</div>
    </div>
    </div>
<div class="content-1-penampung">
   <div style ="text-align:center" class="content-2-layout">
    <div class="content-2-judul">Select City</div>
    <br>
    <a class="content-2-isi" href="">Bandung</a>
    <br>
    <br>
    <a class="content-2-isi" href="">Jakarta Barat</a>
    <br>
    <br>
    <a class="content-2-isi" href="">Jakarta Selatan</a>
    <br>
    <br>
    <a class="content-2-isi" href="">Kelapa Gading</a>
    <br>
    <br>
    <a class="content-2-isi" href="">Kelapa Dua</a>
    <br>
    <br>
    <a class="content-2-isi" href="">Makasar</a>
    <br>
    <br>
    <a class="content-2-isi" href="">Semarang</a>
    <br>
    <br>
    <a class="content-2-isi" href="">Tangerang</a>
    <br>
    <br>
    <a class="content-2-isi" href="">Tangerang Selatan</a>
   </div>

    <div class="content-3-layout">
    @foreach($Hospital as $h)
    <div class="content-3-layout1" style="display:flex; align-items:center; justify-content:space-evenly;">
        <img style="max-width:130px; height:110px; margin-left:35px; margin-top:5px" src="{{asset($h->image)}}" alt="">
        <div style="margin-top:10px; margin-left:10px;" >
        <span style="font-family: Sanchez; text-align:center; color: rgba(0, 0, 0, 0.7); font-style: normal; font-weight: bold; font-size: 14pt">{{$h->name}}</span>
        <br>{{$h->location}},{{$h->city}}
        <br>{{$h->test_type}}
        </div>
        <p>{{$h->test_type}}</p>
        <p style="color: #337093; font-weight: bold; font-size: 12pt">IDR {{$h->price}}</p>
        <button style="width:70px; height:40px; border-radius:35%" onclick="location.href='{{route('detailhospital',$h->id)}}'">Appoint</button>
    </div>
    @endforeach
    </div>

</div>

        <div class="card-group" style="padding-left: 850px">
        {{$Hospital->links()}}; 
        </div>
   

    @endsection
    </body>
</html>