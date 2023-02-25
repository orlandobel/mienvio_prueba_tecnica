@extends('layout')
@section('content')
<div class="row pt-2">
    <div class="col-4">                    
        {{ Form::open(['url' => '/producto/filtrar/precios', 'method' => 'post', 'class' => 'row']) }}
            <label class="ml-2">Filtrar precios</label>
            <input type="number" name="menor" id="menor" class="form-control mx-2" style="width: 150px;" placeholder="$000"> - 
            <input type="number" name="mayor" id="mayor" class="form-control mx-2" style="width: 150px;" placeholder="$000">
            <input type="submit" class="btn btn-primary mx-2" value="Filtrar">
        {{ Form::close() }}                    
    </div>
    <div class="col-4">                    
        {{ Form::open(['url' => '/producto/filtrar/nombre', 'method' => 'post', 'class' => 'row']) }}
            <label class="ml-2">Filtrar nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control mx-2" style="width: 200px;" placeholder="Nombre del producto">
            <input type="submit" class="btn btn-primary mx-2" value="Filtrar">
        {{ Form::close() }}                    
    </div>
    <div class="col-4">
        <a href="/nuevo" class="btn btn-success">Crear producto</a>
    </div>
</div>
<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
    <thead>
        <tr role="row">
            <th tabindex="0" style="width: 154px;">Precio</th>
            <th style="width: 237px;">Nombre</th>
            <th style="width: 109px;">Descripción</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
            <th>Precio</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach($productos as $producto)
            <tr class="odd">
                <td class="sorting_1">${{$producto->precio}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
            