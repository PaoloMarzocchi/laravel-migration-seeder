@extends('layouts.app')

@section('content')
<div class="container ">

    <a class="btn btn-dark my-3" href="{{route('guests.trains.index')}}">Click for all trains</a>

    @include('partials.trains');
</div>





@endsection