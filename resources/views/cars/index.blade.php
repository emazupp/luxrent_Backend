@extends('layouts.cars')

@section("title", "Lista macchine")

@section('content')
    <div class="container mt-4">
        <form action="{{route("cars.create")}}">
            <button class="btn btn-primary">Aggiungi macchina</button>
        </form>
        <table class="table table-striped table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Category</th>
                    <th>Available</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr class="index_tr" onclick="window.location='{{ route('cars.show', $car) }}'">
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->brand->name }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->category->name }}</td>
                        <td>
                            <span class="badge {{ $car->is_available ? 'bg-success' : 'bg-danger' }}">
                                {{ $car->is_available ? 'Yes' : 'No' }}
                            </span>
                        </td>
                        <td><a href="" class="btn btn-warning">Modifica</a></td>
                        <td><a href="" class="btn btn-danger">Elimina</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection