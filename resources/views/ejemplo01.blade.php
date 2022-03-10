<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>    
    <title>Ejemplo 01</title>
</head>
<body>
    <div id="texto"></div>
    <hr>
    <div class="divclass">-----</div>
    <div class="divtxt">-------</div>
    <hr>



    <input type="text" id="dato"><br>
    <p id="salida">+++++++++</p>
    <input type="text" id="dato2"><br>
    <input type="submit" value="Suma" id="operacion">
    <p id="resultado">+++++++++</p>

    <script type="text/javascript">
        document.getElementById("texto").innerHTML = "IDGS-82, Erik Sahian Salazar Fernández";

        $(document).ready(function(){
            $('#divid').html('Mi Gru´po es IDGS-82');
            $('.divclass').html("<h2>Desarrollo Web</h2>");

            $('div').css({'color': '#F54520'});

            //-------------------------------------
            $('#dato').keyup(function(){
                var info = $('#dato').val();
                $('#salida').html(info);
            });

            $('#operacion').click(function(){
                var num1 = $('#dato').val();
                var num2 = $('#dato2').val();
                var res = parseFloat(num1) + parseFloat(num2);
                $('#resultado').html(res);
            });

        });
    </script>
</body>
</html>