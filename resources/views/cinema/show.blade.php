@extends('layouts.base')
@section('title', 'View a new Cinema')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">View a new list Cinema</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('cinema.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mt-5">
                    <div class="card-header">
                        Detalles de la película
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Título:</strong> {{ $cinema->title }}</li>
                            <li class="list-group-item"><strong>Director:</strong> {{ $cinema->director }}</li>
                            <li class="list-group-item"><strong>Género:</strong> {{ $cinema->genre }}</li>
                            <li class="list-group-item"><strong>Año:</strong> {{ $cinema->date }}</li>
                            <li class="list-group-item"><strong>Rating:</strong> {{ $cinema->rating }}</li>
                            <li class="list-group-item"><strong>Duración:</strong> {{ $cinema->duration }}</li>
                            <li class="list-group-item"><strong>Sinopsis:</strong> {{ $cinema->synopsis }}</li>
                            <li class="list-group-item"><strong>Estudio:</strong> {{ $cinema->studio }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection