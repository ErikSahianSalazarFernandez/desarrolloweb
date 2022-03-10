<select name="id_alumno" id="id_alumno">
    <option value="0">--Selecciona un alumno</option>
    @foreach ($alumnos as $alumno)
        <option value="{{$alumno->id}}">{{$alumno->nombre}}</option>        
    @endforeach
</select>

<script type="text/javascript">
    $(document).ready(function(){

        $("#id_alumno").change(function(){
            var alumno = $("#id_alumno").val();
            if(alumno == 0){
                $("#info01").empty();
                $("#info02").empty();
            }
            else{
                $("#info01").load("{{ route('datos2b') }}?id=" + alumno);
            }
        });
    });
</script>