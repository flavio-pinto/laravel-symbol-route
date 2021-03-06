@extends('layouts.main')

@section('title')
    Welcome Page
@endsection

@section('content')
    <div class="jumbotron">
        <h5>{{$nome}} {{$cognome }} - {{$classe}}</h5>
    </div>
    <div class="boxes grid-wrapper">
        <div class="box zone"><img src="{{asset('img/img1.png')}}" alt=""></div>
        <div class="box zone"><img src="{{asset('img/img2.png')}}" alt=""></div>
        <div class="box zone"><img src="{{asset('img/img3.png')}}" alt=""></div>
        <div class="box zone"><img src="{{asset('img/img4.png')}}" alt=""></div>
        <div class="box zone"><img src="{{asset('img/img5.png')}}" alt=""></div>
        <div class="box zone"><img src="{{asset('img/img6.png')}}" alt=""></div>
        <div class="box zone"><img src="{{asset('img/img7.png')}}" alt=""></div>
        <div class="box zone"><img src="{{asset('img/img8.png')}}" alt=""></div>
    </div>
@endsection