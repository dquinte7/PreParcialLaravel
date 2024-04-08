@extends('layouts.base')
@section('title', 'Edit a new Cinema')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Edit a new list Cinema</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('cinema.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    <form class="row shadow m-3 p-3" method="post" action="{{route('cinema.update', $cinema)}}">
        @csrf
        @method('PUT')
        <div class="col-md-6 mt-2">
            <label for="cinema_title" class="form-label">Título</label>
            <input type="text" value="{{old("title",$cinema->title)}}" class="form-control" id="cinema_title" name="title"
                placeholder="Cinema Title">
        </div>
        <div class="col-md-6 mt-2">
            <label for="cinema_director" class="form-label  ">Director</label>
            <input type="text" value="{{old("director",$cinema->director)}}" class="form-control" id="cinema_director" name="director"
                placeholder="Cinema Director">
        </div>
        <div class="col-md-6 mt-2">
            <label for="cinema_genre" class="form-label">Genre</label>
            <input type="text" value="{{old("genre",$cinema->genre)}}" class="form-control" id="cinema_genre" name="genre"
                placeholder="Cinema Genre">
        </div>
        <div class="col-md-6 mt-2">
            <label for="cinema_date" class="form-label">Año</label>
            <input type="number" value="{{old("date",$cinema->date)}}" class="form-control" id="cinema_date" name="date"
                placeholder="Cinema Date">
        </div>
        <div class="col-md-6 mt-2">
            <label for="cinema_rating" class="form-label">Rating</label>
            <input type="text" value="{{old("rating",$cinema->rating)}}" class="form-control" id="cinema_rating" name="rating"
                placeholder="Cinema Rating">
        </div>
        <div class="col-md-6 mt-2">
            <label for="cinema_duration" class="form-label">Duration</label>
            <input type="number" value="{{old("duration",$cinema->duration)}}" class="form-control" id="cinema_duration" name="duration"
                placeholder="Cinema Duration">
        </div>
        <div class="col-md-6 mt-2">
            <label for="cinema_synopsis" class="form-label">Synopsis</label>
            <input type="text" value="{{old("synopsis",$cinema->synopsis)}}" class="form-control" id="cinema_synopsis" name="synopsis"
                placeholder="Cinema Synopsis">
        </div>
        <div class="col-md-6 mt-2">
            <label for="cinema_studio" class="form-label">Studio</label>
            <input type="text" value="{{old("studio",$cinema->studio)}}" class="form-control" id="cinema_studio" name="studio"
                placeholder="Cinema Studio">
        </div>
        <div class="col-12 mt-2">
            <a href="{{ route('cinema.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar película</button>
            @if($errors->any())
            <div class="col-12 mt-2">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </form>
</div>
@endsection