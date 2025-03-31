@extends('layouts.cars')
@section("title", "Dettagli macchina")

@section('content')
    <div class="container mt-4">
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Torna alla lista macchine</a>
        <div class="card mt-3 mb-3">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $car->id }}</h5>
                <p class="card-text">Brand: {{ $car->brand->name }}</p>
                <p class="card-text">Model: {{ $car->model }}</p>
                <p class="card-text">Category: {{ $car->category->name }}</p>
                <p class="card-text">Available: 
                    <span class="badge {{ $car->is_available ? 'bg-success' : 'bg-danger' }}">
                        {{ $car->is_available ? 'Yes' : 'No' }}
                    </span>
                </p>
            </div>
        </div>
    </div>
@endsection