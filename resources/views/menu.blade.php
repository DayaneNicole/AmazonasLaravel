@extends('layouts.app')

@section('title', 'Menú')

@section('content')
    <h1 class="mb-4">Nuestro Menú</h1>

    <form action="{{ route('menu') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <select name="categoria" class="form-select">
                    <option value="">Todas las categorías</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ request('categoria') == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <input type="text" name="buscar" class="form-control" placeholder="Buscar platos" value="{{ request('buscar') }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Filtrar</button>
            </div>
        </div>
    </form>

    <div class="row">
        @foreach($platos as $plato)
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

    {{ $platos->links() }}
@endsection
