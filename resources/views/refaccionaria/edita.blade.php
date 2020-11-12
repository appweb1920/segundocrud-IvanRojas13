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
        Edicion
    </div>

    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form method="post" action="{{ route('refaccionarias.update', $refaccionaria->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $refaccionaria->nombre}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="{{ $refaccionaria->descripcion}}">
            </div>
            <div class="form-group">
                <label for="numPiezas">Numero de Piezas</label>
                <input type="text" class="form-control" name="numPiezas" value="{{ $refaccionaria->numPiezas}}">
            </div>
            <div class="form-group">
                <label for="costoPieza">Costo de la pieza</label>
                <input type="text" class="form-control" name="costoPieza" value="{{ $refaccionaria->costoPieza}}">
            </div>
            <button type="submit" class="btn btn-block btn-danger">Guarda</button>
        </form>
    </div>
</div>
@endsection