<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    .content-1-layout{
        width: 100%;
        height: 300px;
        background: linear-gradient(180deg, #337093 0%, rgba(133, 42, 42, 0.81) 100%);
        border-radius: 0px;
    }
    .content-1-welcome{
        position: absolute;
        width: 700px;
        height: 124px;
        left: 250px;
        top: 220px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 68px;
        line-height: 31px;
        color: #FFFFFF;
    }
    .content-1-uniown{
        position: absolute;
        width: 400px;
        height: 124px;
        left: 253px;
        top: 290px;
        font-family: Sanchez;
        font-style: normal;
        font-size: 68px;
        line-height: 31px;
        color: #FFFFFF;
    }
    .content-1-people{
        position: absolute;
        width: 220px;
        height: 210px;
        left: 1050px;
        top: 175px;
    }
    .content-2-layout{
        width:100%;
        height: 300px;
        position: relative;
        margin: auto;
    }
    * {box-sizing: border-box}
    img {vertical-align: middle;}
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 580px;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: black;
        font-weight: bold;
        font-size: 30px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
     }
     .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }
    .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        color:white;
    }
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    .active, .dot:hover {
        background-color: #717171;
    }
    .content-2-virus{
        position: absolute;
        width: 180px;
        height: 180px;
        left: 30%;
        top: 90px;
    }
    .content-2-text{
        position: absolute;
        width: 465px;
        height: 77px;
        left: 40%;
        top: 150px;
        font-family: Sanchez;
        font-style: normal;
        font-weight: normal;
        font-size: 70px;
        line-height: 31px;
        text-align: center;
    }
    .button{
        position: absolute;
        left: 45%;
        top: 210px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        border-radius: 4px;
        border-color: black;
        color: black;
        text-align: center;
        font-size: 15px;
        width: 140px;
        height: 40px;
        transition: all 0.5s;
        cursor: pointer;
    }
    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }
    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }
    .button:hover span {
        padding-right: 25px;
    }
    .button:hover span:after {
        opacity: 1;
        right: 0;
    }
    .content-2-asset{
        left: 22.5%;
        height: 300px;
        top: 30px;
        position: absolute;
    }
    .content-2-border{
        border-bottom: 1px solid gray; 
        margin-bottom: 30px;
        margin-top: 50px;
    }
    .content-3-layout{
        width: 100%;
    }
    .content-3-title{
        padding-top: 20px;
        padding-left: 30px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-size: 30px;
        line-height: 31px; 
        color: rgba(0, 0, 0, 0.8);
        padding-bottom: 40px;
    }
    .content-3-link{
        padding-left: 900px;
        font-family: Sanchez;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 35px;
        color: gray;
        text-decoration: none;
        padding-bottom: 40px;
    }
    .content-3-logo1{
        width: 20px;
        color: black;
        position: absolute;
        left: 120px;
    }
    .content-3-location{
        style=font-family: Montserrat; 
        color: gray;
    }
    .content-3-type{
        width: 15px;
        color: black;
        position: absolute;
        left: 125px;
    }
    .content-3-setup{
        padding-bottom: 30px;
    }
    
    .content-3-setup1{
        padding-top: 10px;
    }
    .content-3-setup2{
        padding-top: 15px;
    }
    
    .content-3-price{
        color: #337093;
        font-weight: bold;
        font-size: 16pt;
    }
    </style>

    <title>UniOwn</title>
  </head>
  <body style="background-color: white">
@extends('layouts.app')

@section('content')

    <!-- content-1 -->
    <div class="content-1-layout">
    <div class="content-1-welcome">Welcome To</div>
    <div class="content-1-uniown">UniOwn</div>
    <img src="asset/people-home.png" class="content-1-people">
    </div>


    <!-- content-2 -->
    <div class="content-2-layout">
   
    <div class="mySlides">
    <img src ="asset/corona.png" class="content-2-virus">
    <div class="content-2-text">COVID-19</div>
    <button class="button" onclick="location.href='/news'"><span>See News</span></button>
    </div>

    <div class="mySlides">
    <img src="asset/banner-covid.jpg" class="content-2-asset">
    </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    </div>

    <div class="content-2-border"></div>


    <!-- content-3 -->
    <div class="content-3-layout">
    <div class="content-3-title">Hospital Recomendation
    <a href="{{ route('hospitalList') }}" class="content-3-link">See all</a>
    </div>

    <div class="row">
    @foreach($Hospital as $hos)
        <div class="col-sm-4 content-3-setup rounded-3">
            <div class="card">
            <center>
                <img src="{{asset($hos->image)}}" class="card-img-top" alt="..." style="max-width: 150px">
                <div class="card-body">
                    <a  href="{{route('detailhospital',$hos->id)}}" class="card-title" style="font-family: Montserrat; font-size: 14pt; font-style: normal;">{{$hos->name}}</a>
                    <div class="content-3-setup1">
                    <p class="card-text content-3-location"><img src="asset/type-logo.png" class="content-3-type">{{$hos->test_type}}</p>
                    </div>
                    <div>
                    <p class="card-text content-3-location"><img src="asset/hospital-logo.png" class="content-3-logo1">{{$hos->location}}, {{$hos->city}}</p>
                    </div>
                    <div class="content-3-setup2">
                    <p class="content-3-price">IDR {{$hos->price}}</p>
                    </div>
                </div>
            </center>
            </div>
        </div>
        @endforeach
    </div>
    </div>


    @endsection

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }
    </script>

  </body>
</html>