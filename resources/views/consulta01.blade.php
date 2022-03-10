<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica - Consulta de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Libreria de Script --}}
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>    
</head>
<body>
    <h2>Consultar datos con JavaScript</h2>
    <hr>
    <div class="container">
        <table class="table table-dark table-striped">
            <tbody>
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
                </tr>
            </tbody>
        </table>
        <div id="resultado1"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#grupos").change(function(){
                var valgrupo = $("#grupos").val();
                if(valgrupo != 0){
                    $("#resultado1").load("{{ route('datos1') }}?id_grupo=" + valgrupo).serialize();
                }
                else{
                    $("#resultado1").text("------");
                }
            });
        });
    </script>
</body>
</html>