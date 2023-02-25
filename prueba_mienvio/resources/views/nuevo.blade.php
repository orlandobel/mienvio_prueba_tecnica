@extends('layout')

@section('content')
    @foreach ($errors->all() as $error)
        <div class="row">
            <label for="">{{ $error }}</label> <br>
        </div>
    @endforeach
    <div class="row">
        <div class="col-4">
            {{ Form::open(['url' => '/guardar', 'method' => 'post']) }}
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control" required></textarea>
            <label for="precio" class="form-label">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" required>

            <input type="submit" value="Guardar" class="btn btn-primary mt-2">
            {{ Form::close() }}
        </div>
    </div>
@endsection