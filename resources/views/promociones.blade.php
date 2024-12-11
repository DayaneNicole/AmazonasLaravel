@extends('layouts.app')

@section('title', 'Promociones')

@section('content')
    <h1 class="mb-4">Promociones Actuales</h1>

    <div class="row">
        @foreach($promociones as $promocion)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $promocion->imagen }}" class="card-img-top" alt="{{ $promocion->titulo }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $promocion->titulo }}</h5>
                        <p class="card-text">{{ $promocion->descripcion }}</p>
                        <p class="card-text">
                            <small class="text-muted">
                                Válido desde {{ $promocion->fecha_inicio->format('d/m/Y') }}
                                hasta {{ $promocion->fecha_fin->format('d/m/Y') }}
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
