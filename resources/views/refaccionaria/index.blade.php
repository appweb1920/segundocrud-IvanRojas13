@extends(refaccionaria.layout)
@section('content')

<style>
    .push-top {
    margin-top: 50px;
    }
</style>

<div class="push-top">
    <table class="table">
        <thead>
            <tr class="table">
                <td>ID</td>
                <td>Nombre Pieza</td>
                <td>Descripcion</td>
                <td>Número de Piezas</td>
                <td>Costo de la Pieza</td>
                <td class="text-center">Action</td>
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
                    <form action="{{route('refaccionarias.destoy', $refaccionarias->id)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection