@extends('layouts.app')

@section('title', 'Reserva')

@section('content')
    <h1 class="mb-4">Hacer una Reserva</h1>

    <form action="{{ route('reserva.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="personas" class="form-label">Número de personas</label>
                <input type="number" class="form-control" id="personas" name="personas" required min="1">
            </div>
            <div class="col-md-6 mb-3">
                <label for="mesa" class="form-label">Mesa</label>
                <select class="form-select" id="mesa" name="mesa_id" required>
                    @foreach($mesas as $mesa)
                        <option value="{{ $mesa->id }}">Mesa {{ $mesa->numero }} ({{ $mesa->capacidad }} personas)</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>
        <button type="submit" class="btn btn-primary">Hacer Reserva</button>
    </form>
@endsection

@section('scripts')
<script>
    // Aquí puedes agregar JavaScript para manejar la selección de mesas y la validación del formulario
</script>
@endsection
