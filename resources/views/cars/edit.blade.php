@extends("layouts.cars")
@section("title", "Modifica macchina")

@section('content')
<div class="container mt-4">
    <a href="{{ route('cars.index') }}" class="btn btn-secondary mb-3">Torna alla lista macchine</a>
    <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row g-3">
            @php
                $mainImagePath = null;
                $otherImagesPath = [];
            @endphp

            @foreach ($car->images as $image) 
                @if ($image->is_main)
                    @php
                        $mainImagePath = asset('storage/' . $image->path);
                    @endphp
                @else
                    @php
                        $otherImagesPath[] = asset('storage/' . $image->path);
                    @endphp
                @endif
            @endforeach

            <div class="col-md-6 mb-3 d-flex flex-column align-items-center justify-content-center">
                <h2>Immagine principale</h2>
                <img src="{{$mainImagePath ? $mainImagePath : "https://placehold.co/300x200"}}" class="w-100" alt="{{ $car->model }}">
                @if(!$mainImagePath)
                    <p class="mt-2">Nessuna immagine principale caricata</p>
                @endif
            </div>

            <div class="col-md-6 mb-3">
                <h2>Immagini di dettaglio</h2>
                @if(count($otherImagesPath)> 0) 
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            @foreach ($otherImagesPath as $imagePath)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $loop->iteration }}"></button>                       
                            @endforeach

                        </div>
                        <div class="carousel-inner">
                            @foreach ($otherImagesPath as $imagePath)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ $imagePath }}" class="d-block w-100" alt="{{ $car->model }} - Image {{ $loop->iteration }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @else
                    <p class="mt-2">Nessuna immagine di dettaglio caricata</p>
                @endif
            </div>

            <div class="col-md-6 mb-3">
                <input type="file" class="form-control" name="main_image" multiple>
                <small>Seleziona solamente una immagine, sarà quella principale</small>
            </div>
            <div class="col-md-6 mb-3">
                <input type="file" class="form-control" name="detail_images[]" multiple>
                <small>Seleziona anche più di un immagine</small>
            </div>

            <div class="col-md-6">
                <label for="brand_id" class="form-label">Marchio</label>
                <select name="brand_id" id="brand_id" class="form-select" required>
                    <option value="" disabled>Seleziona un marchio</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $car->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="col-md-6">
                <label for="category_id" class="form-label">Categoria</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="" disabled>Seleziona una categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $car->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="model" class="form-label">Modello</label>
                <input type="text" class="form-control" name="model" value="{{ $car->model }}" required>
            </div>
            <div class="col-md-6">
                <label for="year" class="form-label">Anno</label>
                <input type="number" class="form-control" name="year" value="{{ $car->year }}" required>
            </div>
        </div>
        
        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="transmission" class="form-label">Trasmissione</label>
                <select class="form-select" name="transmission" required>
                    <option value="manuale" {{ $car->transmission == 'manuale' ? 'selected' : '' }}>Manuale</option>
                    <option value="automatica" {{ $car->transmission == 'automatica' ? 'selected' : '' }}>Automatica</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="fuel_type" class="form-label">Tipologia carburante</label>
                <select class="form-select" name="fuel_type" required>
                    <option value="benzina" {{ $car->fuel_type == 'benzina' ? 'selected' : '' }}>Benzina</option>
                    <option value="diesel" {{ $car->fuel_type == 'diesel' ? 'selected' : '' }}>Diesel</option>
                    <option value="elettrica" {{ $car->fuel_type == 'elettrica' ? 'selected' : '' }}>Elettrica</option>
                    <option value="hybrid" {{ $car->fuel_type == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                </select>
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <label for="seats" class="form-label">Posti</label>
                <input type="number" class="form-control" name="seats" value="{{ $car->seats }}" required>
            </div>
            <div class="col-md-4">
                <label for="doors" class="form-label">Porte</label>
                <input type="number" class="form-control" name="doors" value="{{ $car->doors }}" required>
            </div>
            <div class="col-md-4">
                <label for="color" class="form-label">Colore</label>
                <input type="text" class="form-control" name="color" value="{{ $car->color }}">
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <label for="horsepower" class="form-label">Cavalli</label>
                <input type="number" class="form-control" name="horsepower" value="{{ $car->horsepower }}">
            </div>
            <div class="col-md-4">
                <label for="engine_size" class="form-label">Cilindrata</label>
                <input type="number" class="form-control" name="engine_size" value="{{ $car->engine_size }}">
            </div>
            <div class="col-md-4">
                <label for="price_per_day" class="form-label">Prezzo al Giorno (€)</label>
                <input type="number" step="0.01" class="form-control" name="price_per_day" value="{{ $car->price_per_day }}" required>
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="is_available" class="form-label">Disponibile</label>
                <select class="form-select" name="is_available" required>
                    <option value="1" {{ $car->is_available ? 'selected' : '' }}>Sì</option>
                    <option value="0" {{ !$car->is_available ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description">{{ $car->description }}</textarea>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mt-4">Aggiorna Macchina</button>
    </form>
</div>
@endsection
