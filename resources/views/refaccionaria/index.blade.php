@extends('refaccionaria.layout')
@section('content')

<style>
    .push-top {
    margin-top: 50px;
    }
</style>

<div class="push-top">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div><br />
    @endif
    <h1>CRUD Segundo Parcial Refaccionaria</h1>
    <a href="{{route('refaccionarias.create')}}" class="btn btn-primary btn-sm"">Registrar nueva pieza</a>
    <table class="table">
        <thead>
            <tr class="table">
                <td>ID</td>
                <td>Nombre Pieza</td>
                <td>Descripcion</td>
                <td>Número de Piezas</td>
                <td>Costo de la Pieza</td>
                <td class="text-center">Accion</td>
            </tr>
        </thead>
        <tbody>
            @foreach($refaccionaria as $refaccionarias)
            <tr>
                <td>{{$refaccionarias->id}}</td>
                <td>{{$refaccionarias->nombre}}</td>
                <td>{{$refaccionarias->descripcion}}</td>
                <td>{{$refaccionarias->numPiezas}}</td>
                <td>{{$refaccionarias->costoPieza}}</td>
                <td class="text-center">
                    <a href="{{route('refaccionarias.edit', $refaccionarias->id)}}" class="btn btn-primary btn-sm"">Edita</a>
                    <form action="{{route('refaccionarias.destroy', $refaccionarias->id)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection