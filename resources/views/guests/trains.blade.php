@extends('layouts.app')

@section('content')
<div class="container my-5 d-flex justify-content-center align-items-center">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Train code</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure station</th>
                    <th scope="col">Arrival station</th>
                </tr>
            </thead>
            <tbody>
                @forelse($trains as $train)
                <tr class="">
                    <td scope="row">{{$train->train_code}}</td>
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                </tr>
                @empty
                    <h1>No train found</h1>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="text-center py-4">
    <h3>Sorry, but we have few details about the trains.</h3>
    <p>
        Go to Trenitalia website for more informations 👉 
        <a href="https://www.trenitalia.com/it.html">Here</a>
    </p>
</div>




@endsection