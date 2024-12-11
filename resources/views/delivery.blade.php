@extends('layouts.app')

@section('title', 'Delivery')

@section('content')
    <h1 class="mb-4">Servicio de Delivery</h1>

    <p class="mb-4">Disfruta de nuestros deliciosos platos en la comodidad de tu hogar.</p>

    <div class="row">
        @foreach($platosDisponibles as $plato)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $plato->imagen }}" class="card-img-top" alt="{{ $plato->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plato->nombre }}</h5>
                        <p class="card-text">{{ Str::limit($plato->descripcion, 100) }}</p>
                        <p class="card-text"><strong>Precio: ${{ $plato->precio }}</strong></p>
                        <form action="{{ route('carrito.agregar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="plato_id" value="{{ $plato->id }}">
                            <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
