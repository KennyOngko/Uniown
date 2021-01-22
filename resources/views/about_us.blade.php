
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .content-1-background{
        width: 100%;
        height: 349px;
        background-image: url("asset/background.png");
        background-repeat: no-repeat;
        
    }
    .content-1-layout{
        position: absolute;
        width: 100%;
        height: 349px;

        background: rgba(44, 44, 44, 0.6);
    }
    .content-1-aboutus{
        position: absolute;
        width: 373px;
        height: 63px;
        left: 534px;
        top: 80px;

        font-family: Sanchez;
        font-style: normal;
        font-weight: normal;
        font-size: 48px;
        line-height: 61px;
        text-align: center;

        color: #FFFFFF;
    }
    .content-1-dekripsi{
        position: absolute;
        width: 1223px;
        height: 54px;
        left: 109px;
        top: 180px;

        font-family: Sanchez;
        font-style: normal;
        font-weight: normal;
        font-size: 36px;
        line-height: 46px;
        text-align: center;

        color: #FFFFFF;
    }
    .content-2-ourstory{
        /* position: relative; */
        width: 253px;
        height: 52px;
        padding-left: 43px;
        padding-top: 20px;

        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 36px;
        line-height: 31px;
        /* or 86% */


        color: rgba(0, 0, 0, 0.71);

    }
    .content-2-deskripsi{
        width: 617px;
        height: 186px;
        padding-left: 43px;
        padding-top: 20px;
        font-family: Montserrat;
        font-style: normal;
        font-weight: normal;
        font-size: 22px;
        line-height: 31px;
        text-align: justify;
        color: #000000;

    }
    .content-2-line{
        position: absolute;
        width: 250px;
        height: 0px;
        left: 590px;
        top: 620px;

        border: 1px solid #000000;
        transform: rotate(90deg);

    }
    .content-3-ourteam{
        position: absolute;
        width: 253px;
        height: 52px;
        left: 757px;
        top: 500px;

        font-family: Montserrat;
        font-style: normal;
        font-weight: bold;
        font-size: 36px;
        line-height: 31px;


        color: rgba(0, 0, 0, 0.71);

    }
    .content-3-team{
        position: absolute;
        width: 89px;
        height: 114px;
        left: 780px;
        top: 560px;
        display: flex;
    }

    .content-3-img{
        padding-left: 20px;
        padding-right: 20px;
        text-align: center;
    }
    </style>
    <title>UniOwn</title>
</head>
<body style="background-color: white">
@extends('layouts.app')

@section('content')
<div class="content-1-background" >
<div class="content-1-layout">
<div class="content-1-aboutus">About UniOwn</div>
<div class="content-1-dekripsi">Inspire and helping people <br> to make a greate future.</div>
</div>
</div>


<div class="content-2-ourstory">Our Story</div>  
<div class="content-2-deskripsi">UniOwn is a digital health company in Indonesia that handled by students in BINUS University since 2020. We care to give you a medical information that is easy to implement, accurate and accessible to anyone. All information compiled by a team of doctors in Indonesian.</div>
<hr class="content-2-line">  

<div class="content-3-ourteam">Our Team</div>

<div class="content-3-team">
    <div class="content-3-img">
        <a href="https://www.instagram.com/tasyaprajna/"><img src="asset/image 23.png" alt="inn_logo" /></a>
        <p class="content-3-img">Prajna<br><i>Marketing</i></p>
    </div>
    <div class="content-3-img">
        <a href="https://www.instagram.com/dirkalv/" ><img src="asset/image 24.png" alt="ccs_logo" /></a>
        <p class="content-3-img">Dirk<br><i>Website Developer</i></p>
    </div>
    <div class="content-3-img">
        <a href="https://www.instagram.com/kenny_ongko/" ><img src="asset/image 27.png" alt="ccs_logo" /></a>
        <p class="content-3-img">Kenny<br><i>Website Developer</i></p>
    </div>
</div>

@endsection



</body>
</html>