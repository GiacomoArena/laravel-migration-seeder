@extends('layout.main')

@section('content')

<h1>Trains</h1>

<ul>
    @foreach ($trains as $train )

        <li> ciao {{$train->start_station}}</li>

    @endforeach
</ul>



@endsection
