@extends('layouts.app')

@section('content')
<div class="container ">

    <a class="btn btn-dark my-3" href="{{route('guests.trains.show')}}">Click for today's trains</a>

    <div class="my-5 d-flex justify-content-center align-items-center">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Train code</th>
                        <th scope="col">Company</th>
                        <th scope="col">Departure station</th>
                        <th scope="col">Arrival station</th>
                        <th scope="col">Departure time</th>
                        <th scope="col">Arrival time</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($trains as $train)
                    <tr class="">
                        <td scope="row">{{$train->train_code}}</td>
                        <td>{{$train->company}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                    </tr>
                    @empty
                        <h1>No train found</h1>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
   
    <div class="text-center py-4">
        <h3>We have few details about the trains.</h3>
        <p>
            Go to Trenitalia website for more informations 👉 
            <a href="https://www.trenitalia.com/it.html">Here</a>
        </p>
    </div>
</div>





@endsection