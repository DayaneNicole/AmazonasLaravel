@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
    <h1 class="mb-4">Panel de Administración</h1>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total de Platos</h5>
                    <p class="card-text display-4">{{ $totalPlatos }}</p>
                    <a href="{{ route('admin.platos') }}" class="btn btn-primary">Ver Platos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    
