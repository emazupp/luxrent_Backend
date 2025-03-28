@extends('layouts.cars')

@section("title", "Lista macchine")

@section('content')
    @foreach ($cars as $car)
        <li>{{$car->model}}</li>
    @endforeach
@endsection