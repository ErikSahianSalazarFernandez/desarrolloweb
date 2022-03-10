<h3>Alumnos</h3>
<div class="container">
    <table class="table table-dark table-striped">
        <tr>
            <td>ID</td>
            <td>Matrícula</td>
            <td>Nombre</td>
            <td>FN</td>
            <td>Genero</td>
            <td>Email</td>
        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{$alumno->id}}</td>
                <td>{{$alumno->matricula}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->fn}}</td>
                <td>{{$alumno->gen}}</td>
                <td>{{$alumno->email}}</td>
            </tr>
        @endforeach
    </table>
</div>