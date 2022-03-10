<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica - Consulta de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>    
</head>
<body>
    <h2>Consultar datos con JavaScript</h2>
    <hr>
    <center>
        <form action="{{ route('consulta2r')}}" method="GET" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="container">
                <table class="table table-dark table-striped" width="80%">
                    <tr>
                        <td>Grupo: </td>
                        <td>
                            <select name="id_grupo" id="grupos">
                                <option value="0">Selecciona un grupo</option>
                                @foreach ($grupos as $grupo)
                                    <option value="{{$grupo->id}}">{{$grupo->clave}}</option>                                
                                @endforeach
                            </select>
                        </td>
                        <td rowspan="3" id="info01" style="text-align: justify"></td>
                    </tr>
                    <tr>
                        <td>Alumnos: </td>
                        <td id="alumno">
                            <select name="id_alumno" id="id_alumno">
                                <option value="0">Selecciona un Grupo Antes</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="info02"></div>
        </form>
    </center>
    <hr>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#grupos").change(function(){
                var valgrupo = $("#grupos").val();
                if(valgrupo == 0){
                    $("#info01").empty();
                    $("#info02").empty();
                    $("#alumno").empty();
                    $("#alumno").html('<select name="id_alumno" id="id_alumno"><option value="0">Selecciona un Grupo Antes</option></select>');
                }
                else{
                    $("#alumno").empty();
                    $("#alumno").load("{{ route('datos2a') }}?id_grupo=" + valgrupo).serialize();
                }
            });
        });
    </script>
</body>
</html>