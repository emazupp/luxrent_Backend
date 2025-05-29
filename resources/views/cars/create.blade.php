@extends("layouts.cars")
@section("title", "Aggiungi macchina")

@section('content')
<div class="container mt-4">
    <a href="{{ route('cars.index') }}" class="btn btn-secondary mb-3">Torna alla lista macchine</a>
    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row g-3">
            <div class="col-md-6 mb-3">
                <label for="main_image" class="form-label">Immagine principale</label>
                <input type="file" class="form-control" name="main_image" multiple>
                <small>Seleziona solamente una immagine, sarà quella principale</small>

            </div>
            
            <div class="col-md-6 mb-3">
                <label for="top_image" class="form-label">Immagine vista dall'alto (dettaglio)</label>
                <input type="file" class="form-control" name="top_image" multiple>
                <small>Seleziona solamente una immagine, sarà quella di dettaglio con vista dall'alto</small>
            </div>

            <div class="col-md-12">
                <div class="col-md-6 mb-3">
                    <label for="detail_images[]" class="form-label">Immagini di dettaglio</label>
                    <input type="file" class="form-control" name="detail_images[]" multiple>
                    <small>Seleziona anche più di un immagine</small>
                </div>
            </div>



            <div class="col-md-6">
                <label for="brand_id" class="form-label">Marchio</label>
                <select name="brand_id" id="brand_id" class="form-select" required>
                    <option value="" disabled selected>Seleziona un marchio</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="col-md-6">
                <label for="category_id" class="form-label">Categoria</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="" disabled selected>Seleziona una categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="model" class="form-label">Modello</label>
                <input type="text" class="form-control" name="model" required>
            </div>
            <div class="col-md-6">
                <label for="year" class="form-label">Anno</label>
                <input type="number" class="form-control" name="year" required>
            </div>
        </div>
        
        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="transmission" class="form-label">Trasmissione</label>
                <select class="form-select" name="transmission" required>
                    <option value="" disabled selected>Seleziona tipologia trasmissione</option>
                    <option value="manuale">Manuale</option>
                    <option value="automatica">Automatica</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="fuel_type" class="form-label">Tipologia carburante</label>
                <select class="form-select" name="fuel_type" required>
                    <option value="" disabled selected>Seleziona tipologia carburante</option>
                    <option value="benzina">Benzina</option>
                    <option value="diesel">Diesel</option>
                    <option value="elettrica">Elettrica</option>
                    <option value="hybrid">Hybrid</option>
                </select>
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <label for="seats" class="form-label">Posti</label>
                <input type="number" class="form-control" name="seats" required>
            </div>
            <div class="col-md-4">
                <label for="doors" class="form-label">Porte</label>
                <input type="number" class="form-control" name="doors" required>
            </div>
            <div class="col-md-4">
                <label for="color" class="form-label">Colore</label>
                <input type="text" class="form-control" name="color">
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-4">
                <label for="horsepower" class="form-label">Cavalli</label>
                <input type="number" class="form-control" name="horsepower">
            </div>
            <div class="col-md-4">
                <label for="engine_size" class="form-label">Cilindrata</label>
                <input type="number" class="form-control" name="engine_size">
            </div>
            <div class="col-md-4">
                <label for="price_per_day" class="form-label">Prezzo al Giorno (€)</label>
                <input type="number" step="0.01" class="form-control" name="price_per_day" required>
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label for="is_available" class="form-label">Disponibile</label>
                <select class="form-select" name="is_available" required>
                    <option value="1">Sì</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mt-4">Aggiungi Macchina</button>
    </form>
</div>
@endsection
