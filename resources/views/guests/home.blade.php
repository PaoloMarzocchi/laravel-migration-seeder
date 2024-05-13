@extends('layouts.app')

@section('content')
<section id="welcome" class="bg-dark text-light">
    <div class="container vh-100">
        <div class="col text-center pt-5">
            <h1>Welcome to BoolTrain</h1>
            <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, vel.</p>
            <a class="btn btn-outline-warning my-3 fw-bold" href="{{route('guests.trains.index')}}">Go to trains</a>
        </div>
        
    </div>
</section>
@endsection