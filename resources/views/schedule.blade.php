<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>schedule</title>

    <style>
        .content-1-judul{
            width: 772px;
            height: 66px;
            margin-left:480px;
            margin-top :80px;
            font-family: Montserrat;
            font-style: normal;
            font-weight: bold;
            font-size: 96px;
            line-height: 31px;
            color: #FFFFFF;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.8);

        }
        .content-1-layout{
            width: 355px;
            height: 127px;
            margin-left: 78px;
            margin-top: 100px;
            background: #AACBE3;
            border: 3px solid #000000;
            box-sizing: border-box;
            box-shadow: 3px -3px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px 50px 0px 0px;
        }
        .content-1-schedule{
            width: 341px;
            height: 51px;
            font-family: Sanchez;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 31px;
            color: rgba(0, 0, 0, 0.67);
            text-align:center;
            margin-top: 40px;
        }
        .content-2-layout{
            width: 1317px;
            height: 342px;
            overflow: auto;
            border:1px solid;
            margin-left: 78px;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px #000000;
    }

    .content-3-history{
            width: 341px;
            height: 51px;
            font-family: Sanchez;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 31px;
            color: rgba(0, 0, 0, 0.67);
            text-align:center;
            margin-top: 40px;
        }
        .content-3-layout{
            width: 355px;
            height: 127px;
            margin-left: 78px;
            margin-top: 100px;
            background: #AACBE3;
            border: 3px solid #000000;
            box-sizing: border-box;
            background: rgba(150, 57, 57, 0.3);
            border-radius: 5px 50px 0px 0px;
        }
    
        .content-4-layout{
            width: 1317px;
            height: 342px;
            overflow: auto;
            border:1px solid;
            margin-left: 78px;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px #000000;
    }
    </style>

</head>
<body style="background-color:#FFFFFF">
@extends('layouts.app')

@section('content')
    <hr style="border: 1px solid black"> 
    <div class="content-1-judul">Your Schedule</div>
    <div class="content-1-layout">
        <div class="content-1-schedule">Schedule</div>
    </div>

    <div class="content-2-layout">
    @foreach($Schedule as $s)
        
        <div class="content-2-layout1" style="display:flex;">
            <img style="width: 231px; margin-left:35px; margin-top:25px; height: 231px; "src="{{asset($s->Hospital->image)}}" alt="">
            <div style="margin-top:30px; margin-left:100px;" >
                <span style="font-family: Montserrat; text-align:center; color: rgba(0, 0, 0, 0.47); font-style: normal; font-weight: bold; font-size: 28px;">{{$s->date}}</span>
                <br><br><img src="asset/image 19.png" alt=""><span style="padding-left:10px; width: 522px; height: 49px; font-family: Montserrat; font-style: normal; font-weight: normal; font-size: 24px; line-height: 29px; text-align: center; color: rgba(0, 0, 0, 0.47);">{{$s->people}} People</span>
                <br><br><img src="asset/image 17.png" alt=""><span style=" padding-left:10px; width: 522px; height: 49px; font-family: Montserrat; font-style: normal; font-weight: normal; font-size: 24px; line-height: 29px; text-align: center; color: rgba(0, 0, 0, 0.47);">{{$s->Hospital->name}}</span>
                <br><br><img src="asset/image 20.png" alt=""><span style=" padding-left:10px; width: 522px; height: 49px; font-family: Montserrat; font-style: normal; font-weight: normal; font-size: 24px; line-height: 29px; text-align: center; color: rgba(0, 0, 0, 0.47);">{{$s->Hospital->city}}, {{$s->Hospital->location}}</span>
            </div>
        <div style="margin-top:30px; margin-left:40px;">
            <span style=" padding-left:100px; width: 283.7px; height: 31.63px; font-family: Montserrat; font-style: normal; font-weight: bold; font-size: 30px; line-height: 37px; text-align: center; color: #337093;">IDR {{$s->Hospital->price}}</span>
        </div>
        </div>
        <hr>
    @endforeach
    </div>
    <hr style="border: 1px solid black; margin-top:150px"> 
    <div class="content-3-layout">
        <div class="content-3-history">History</div>
    </div>

    <div class="content-4-layout">
    @foreach($Schedule as $s)
        <div class="content-4-layout1" style="display:flex;">
            <p style="margin-top:50px; margin-left:30px; width: 341px; height: 51px; font-family: Sanchez; font-style: normal; font-weight: normal; font-size: 36px; line-height: 31px; color: rgba(0, 0, 0, 0.67);">{{$s->Hospital->name}}</p>
            <div style="margin-top:30px; margin-left:100px;">
                <span style="font-family: Montserrat; text-align:center; color: rgba(0, 0, 0, 0.47); font-style: normal; font-weight: bold; font-size: 28px; ">{{$s->date}}</span>
                <br><span style="font-family: Montserrat; text-align:center; color: rgba(0, 0, 0, 0.47); font-style: normal; font-weight: bold; font-size: 28px;">Order Number/ID: {{$s->id}}</span>
                <br><span  style="font-family: Montserrat; text-align:center; color: rgba(0, 0, 0, 0.47); font-style: normal; font-weight: bold; font-size: 28px;">{{$s->Hospital->test_type}}</span>
            </div>
            @foreach($s->History as $h)
            <div style="margin-top:50px; margin-left:55px;">
              <span  style=" font-family: Montserrat; text-align:center; color: rgba(0, 0, 0, 0.47); font-style: normal; font-weight: bold; font-size: 28px;">Result: {{$h->result}}</span>
            </div>
            @endforeach
        </div>    
    <hr>
    @endforeach
    </div>

@endsection
</body>
</html>