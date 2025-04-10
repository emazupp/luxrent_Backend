@extends('layouts.cars')
@section("title", "Dettagli macchina")

@section('content')
    <div class="modal fade" id="destroyModal{{ $car->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Elimina macchina</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <strong>ATTENZIONE!</strong> Sei sicuro di voler eliminare <strong>definitivamente</strong> questa macchina?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <a href="{{ route('cars.index') }}" class="btn btn-secondary mb-3">Torna alla lista macchine</a>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Dettagli Macchina</h5>
                <div class="row">

                    @php
                        $mainImagePath = null;
                        $otherImagesPath = [];
                    @endphp

                    @foreach ($car->images as $image) 
                        @if ($image->is_main)
                            @php
                                $mainImagePath = asset($image->path);
                            @endphp
                        @else
                            @php
                                $otherImagesPath[] = asset($image->path);
                            @endphp
                        @endif
                    @endforeach
                    
                    <div class="col-md-6 mb-3">
                        <h2 class="text-center mb-3">Immagine principale</h2>
                        
                        @if($mainImagePath)
                            <div class="d-flex align-items-center justify-content-center bg-dark rounded image-main-container">
                                <img src="{{ $mainImagePath }}" class="img-fluid h-100 w-auto"  alt="{{ $car->model }}">
                            </div>
                        @else
                            <div class="d-flex align-items-center justify-content-center bg-light rounded image-main-container">
                                <p class="text-muted">Nessuna immagine principale caricata</p>
                            </div>
                        @endif
                      
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <h2 class="text-center mb-3">Immagini di dettaglio</h2>
                        @if(count($otherImagesPath)> 0) 
                            <div id="carouselExampleIndicators" class="carousel slide h-400" data-bs-ride="true">
        
                                <div class="carousel-indicators">
                                    @foreach ($otherImagesPath as $imagePath)
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" ></button>                       
                                    @endforeach
                                </div>
        
                                <div class="carousel-inner h-100 bg-dark rounded">
                                    @foreach ($otherImagesPath as $imagePath)
                                        <div class="carousel-item h-100 {{ $loop->first ? 'active' : '' }}">
                                            <div class="d-flex align-items-center justify-content-center h-100 image-detail-container">
                                                <img src="{{ $imagePath }}" class="d-block w-100" alt="{{ $car->model }} - Image {{ $loop->iteration }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
        
                                <button class="carousel-control-prev" type="button" 
                                        data-bs-target="#carouselExampleIndicators" 
                                        data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" 
                                        data-bs-target="#carouselExampleIndicators" 
                                        data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        @else
                            <div class="bg-light d-flex align-items-center justify-content-center rounded h-400">
                                <p class="text-muted">Nessuna immagine di dettaglio caricata</p>
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <p><strong>ID:</strong> {{ $car->id }}</p>
                        <p><strong>Brand:</strong> {{ $car->brand->name }}</p>
                        <p><strong>Model:</strong> {{ $car->model }}</p>
                        <p><strong>Category:</strong> {{ $car->category->name }}</p>
                        <p><strong>Year:</strong> {{ $car->year }}</p>
                        <p><strong>Description:</strong> {{ $car->description }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Transmission:</strong> {{ $car->transmission }}</p>
                        <p><strong>Fuel Type:</strong> {{ $car->fuel_type }}</p>
                        <p><strong>Seats:</strong> {{ $car->seats }}</p>
                        <p><strong>Doors:</strong> {{ $car->doors }}</p>
                        <p><strong>Color:</strong> {{ $car->color }}</p>
                        <p><strong>Horsepower:</strong> {{ $car->horsepower }}</p>
                        <p><strong>Engine Size:</strong> {{ $car->engine_size }}</p>
                        <p><strong>Price per day:</strong> €{{ number_format($car->price_per_day, 2) }}</p>
                        <p><strong>Available:</strong> 
                            <span class="badge {{ $car->is_available ? 'bg-success' : 'bg-danger' }}">
                                {{ $car->is_available ? 'Yes' : 'No' }}
                            </span>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#destroyModal{{ $car->id }}">Elimina</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection