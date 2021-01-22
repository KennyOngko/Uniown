@extends('layouts.app')

@section ('content')
<div class=container>
    <div class="row"></div>
        <br>
        <div class="list-group">
            <a class="list-group-schedule">History</h1>
            @foreach($schedule as $s)
            <a href="/history/{{$s->hospital}}" class="list-group-schedule">{{$s->hospital}}</a>
            <a href="/history/{{$s->date}}" class="list-group-schedule">{{$s->date}}</a>
            @endforeach
            <button type="button" class="btn btn result">View Result</button>
        </div>
</div>