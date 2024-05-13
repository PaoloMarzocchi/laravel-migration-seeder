@extends('layouts.app')

@section('page-title','Trains')

@section('content')

<section id="trains" class="text-light">
    <div class="container">
        
        <div class="my-5 text-center">
            <a class="btn btn-warning fw-bold" href="{{route('guests.trains.index')}}">Click for all trains</a>
            <a class="btn btn-warning fw-bold" href="{{route('guests.trains.show')}}">Click for today's trains</a>
        </div>
        <div class="mt-5 d-flex justify-content-center align-items-center">
            <div class="table-responsive">
                <table class="table table-warning table-striped">
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
                    <tbody class="table-group-divider">
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

        <div class="info text-center py-2">
            <h3>We have few details about the trains.</h3>
            <p>
                Go to Trenitalia website for more informations 👉 
                <a href="https://www.trenitalia.com/it.html">Here</a>
            </p>
        </div>
    </div>
</section>