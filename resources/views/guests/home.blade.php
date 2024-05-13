@extends('layouts.app')

@section('content')

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col text-center">
        <h1>Welcome! click below to see our trains</h1>
        <a class="btn btn-dark my-3" href="{{route('guests.trains.index')}}">Go to trains</a>
    </div>
    
</div>

@endsection