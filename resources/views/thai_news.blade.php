<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <style>
            .content-1-img{
                max-width: 200px;
            }

        </style>
    </head>
    <body 	2201732626 – Prajna Tasya
	2201798686 – Kenny Ongko
	2201791654 – Dirk Alvaro
	2201795085 – Vincentius Kevin Timor
	2201767743 – Samuel Christianto Chandra
>
    @extends('layouts.app')

    @section('content')
        <center>
        @foreach($News as $news)
        <div class="card mb-4" style="max-width: 540px">
        <div class="row g-0">
            <div class="col-md-4">
            <img class="content-1-img" src="{{asset($news->image)}}" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$news->title}}</h5>
                <a href="{{route('detailNews',$news->id)}}" class="btn btn-info btn-sm btn-block align-items-end">View Details</a>
            </div>
            </div>
        </div>
        </div>
        @endforeach
        </center>
        <div class="card-group justify-content-center">
        {{$News->links()}}; 
        </div>

        @endsection
    </body>
</html>