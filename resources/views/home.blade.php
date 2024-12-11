@extends('layouts.app')

@section('title', 'Inicio')
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1 class="mb-4">Bienvenido a nuestro restaurante</h1>

    <div class="row">
        <div class="col-md-8">
            <h2>Platos destacados</h2>
            <div class="row">
                @foreach($featuredDishes as $dish)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ $dish->imagen }}" class="card-img-top" alt="{{ $dish->nombre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $dish->nombre }}</h5>
                                <p class="card-text">{{ Str::limit($dish->descripcion, 100) }}</p>
                                <a href="{{ route('menu') }}" class="btn btn-primary">Ver menú</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <h2>Promociones actuales</h2>
            @foreach($promotions as $promotion)
                <div class="card mb-3">
                    <img src="{{ $promotion->imagen }}" class="card-img-top" alt="{{ $promotion->titulo }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $promotion->titulo }}</h5>
                        <p class="card-text">{{ Str::limit($promotion->descripcion, 100) }}</p>
                        <a href="{{ route('promociones') }}" class="btn btn-secondary">Ver promociones</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
