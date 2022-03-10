@extends('layout.app')

@section('content')
<center><h1>Alumnos</h1></center>
<hr>
<div>
    <a class="btn btn-primary" role="button" href="{{route('nuevo')}}">Nuevo Alumno</a>
</div>
<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Foto</th>
                <th scope="col"> Matricula </th>
                <th scope="col"> Nombre </th>
                <th scope="col"> Genero</th>
                <th scope="col"> Fecha Nacimiento </th>
                <th scope="col"> Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $datos)
            <tr>
                <td> <img src="{{ Storage::url('public/'.$datos->foto) }}" width="100"></td>
                <td> {{ $datos->matricula }} </td>
                <td> {{ $datos->nombre }} </td>
                <td> {{$datos->gen }} </td>
                <td> {{ $datos->fn}} </td>
                <td>
                    <a href="{{route('detalle', ['id' => $datos->id]) }}"><button type="button" class="btn btn-danger">Detalle</button></a><br>
                    <a href="{{route('editar', ['id' => $datos->id]) }}"><button type="button" class="btn btn-danger"">Editar</button></a>
                    {{-- <form action="{{ route('borrar1', ['id' => $datos->id])}}" method="POST"> --}}
                    <form action="{{route('borrar2', ['id' => $datos->id]) }}" method="POST">
                        {{ method_field('DELETE')}}
                        {{ csrf_field() }}
                        <input type="submit" value="Borrar 1" class="btn btn-danger">
                    </form>
                    <a href="{{ route('borrar2', ['id' => $datos->id])}}"><button button type="button" class="btn btn-danger">Borrar 2</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
