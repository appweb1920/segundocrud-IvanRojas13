@extends('refaccionaria.layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>


<div class="card push-top">
    <div class="card-header">
        Añadir Pieza
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form method="post" action={{ route('recolectores.store' }}>
            <div class="form-group">
                @csrf
                <label for="Nombre"></label>
                <input type="text" class="form-control" name="nombre"/>
            </div>
            <div class="form-group">
                @csrf
                <label for="Descripcion"></label>
                <input type="text" class="form-control" name="descripcion"/>
            </div>
            <div class="form-group">
                @csrf
                <label for="Número de Piezas"></label>
                <input type="text" class="form-control" name="numPiezas"/>
            </div>
            <div class="form-group">
                @csrf
                <label for="Costo de la pieza"></label>
                <input type="text" class="form-control" name="costoPieza"/>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
</div>