@extends('layouts.app')

@section('page-title','Trains');

@section('content')

<div class="container ">

    <a class="btn btn-dark my-3" href="{{route('guests.trains.show')}}">Click for today's trains</a>

    @include('partials.trains');
</div>





@endsection