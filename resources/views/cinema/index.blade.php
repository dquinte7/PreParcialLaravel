@extends('layouts.base')
@Section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-info" role="alert">Cinema</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Títilo</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Género</th>
                        <th scope="col">Fecha publicaión</th>
                        <th scope="col">Califiación</th>
                        <th scope="col">Duración</th>
                        <th scope="col">Sinopsis</th>
                        <th scope="col">Producción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cinemas as $cinema)
                    <tr>
                        <th scope="row">{{$cinema->id}}</th>
                        <td>{{$cinema->title}}</td>
                        <td>{{$cinema->director}}</td>
                        <td>{{$cinema->genre}}</td>
                        <td>{{$cinema->date}}</td>
                        <td>{{$cinema->rating}}</td>
                        <td>{{$cinema->duration}}</td>
                        <td>{{$cinema->synopsis}}</td>
                        <td>{{$cinema->studio}}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-sm" href="{{route('cinema.edit', $cinema)}}">Edit</a>
                                <a class="btn btn-warning btn-sm" href="{{route('cinema.show', $cinema)}}">Detail</a>
                                <form action="{{route('cinema.destroy', $cinema)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Está seguro de eliminar la infoción?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12 mx-3">
            <a href="{{ route('cinema.create') }}" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
@endsection