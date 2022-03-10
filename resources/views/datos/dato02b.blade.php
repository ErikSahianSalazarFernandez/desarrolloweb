<div class="container">
    <table class="table table-dark table-striped" width="80%">
        <tr>
            <td>ID</td>
            <td>Matrícula</td>
            <td>Nombre</td>
            <td>FN</td>
            <td>Genero</td>
            <td>Email</td>
        </tr>
        <tr>
            <td>{{$alumno->id}}</td>
            <td>{{$alumno->matricula}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->fn}}</td>
            <td>{{$alumno->gen}}</td>
            <td>{{$alumno->email}}</td>
        </tr>
    </table>
</div>
<hr>

<script type="text/javascript">
    $(document).ready(function(){
        $("#info02").load("{{ route('datos2c') }}");
    });
</script>