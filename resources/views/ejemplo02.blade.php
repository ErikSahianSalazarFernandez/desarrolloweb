<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo 2</title>
    {{-- Libreria de Script --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

</head>
<body>
    <h2>Ejemplo 02 - Arreglos y Eventos</h2><br>
    <hr>
    <br>

    <table>
        <tr>
            <td colspan="3"></td>
            <div id="mostrar">*******</div><br>
            <select id="seleccion"></select><br>
        </tr>
        <tr>
            <td>Mostrar todos los elementos</td>
            <td colspan="2"><input type="button" value="Mostrar Elementos" id="todos"></td>
        </tr>
        <tr>
            <td>Buscar elemento</td>
            <td><input type="text" id="elemento"></td>
            <td><input type="submit" value="buscar elemento" id="buscar"></td>
        </tr>
        <tr>
            <td>Agregar elemento</td>
            <td><input type="text" id="agregar"></td>
            <td><input type="submit" value="Agregar elemento" id="addUno"></td>
        </tr>
        <tr>
            <td>Borrar elemento</td>
            <td><input type="text" id="borrar"></td>
            <td><input type="submit" value="Borrar elemento" id="remove"></td>
        </tr>
    </table>

    <script type="text/javascript">
        $(document).ready(function(){
            var lista = ['Roberto ','Aida ','Sam ','Damian ','Alejandro ','Hugo '];
            console.log(lista);
            //alert(lista);
            //Alert saldra en alerta del navegador
            // Este console es para impirmir en la consola el arreglo dentro de los parentesis            

            //Html no identifica que esta dentro de un ciclo de for, entonces el for nos va mostrando dato por dato
            //entonces nosotros solo veremos el dato final y entonces el --APPEND-- nos muestra todos los registros
            //del for y antes de usar una vartiable en el append tenemos que quitarle el valor para que no salga
            //el valor antiguo que tenia

            //---------------------------------------------------------
            //-----------------------Mostrar Todos---------------------
            $('#todos').click(function(){
                $('#mostrar').html("");
                $('#seleccion').empty();
                for(var x=0; x<lista.length; x++){
                    $('#mostrar').append("["+ x +"]" + lista[x] + "<br>");
                    $('#seleccion').append('<option value="' + x + '">[' + x + ']' + lista[x] + '</option>');
                }
            });

            //-----------------------Mostrar un elemento---------------------
            $('#buscar').click(function(){
                var elemento = $('#elemento').val();
                if(elemento != ''){ 
                    $('#mostrar').html("["+ elemento+ "]" + lista[elemento]);
                }else{
                    alert("No a colocado datos o dato correcto !!!");                    
                }
            });

            //-----------------------Agregar un elemento---------------------
            $('#addUno').click(function(){
                var elemento = $('#agregar').val();
                
                if(elemento != ''){ 
                    lista.push(elemento);  // <----------- Agrega un elemento
                    $('#mostrar').html("");
                    $('seleccion').empty();
                    for(var x=0; x<lista.length; x++){
                    $('#mostrar').append("["+ x +"]" + lista[x] + "<br>");
                    $('#seleccion').append('<option id="' + x + '">[' + x + ']' + lista[x] + '</option>');
                    }
                }else{
                    alert("No a colocado datos o dato correcto !!!");                    
                }
            });

             //-----------------------ELIMINAR un elemento---------------------

            //TAREA : Busqueda por nombre
            //.pop(); -> borra el ultimo elemento de la lista/array
            //.shift(); -> borra el primer elemento de la lista/array
            //QUe son los patrones, para que son, como se contruyen, y como funcionan 
            ///www.html5pattern.com/Names
            //

             $('#remove').click(function(){
                var elemento = $('#borrar').val();
                
                if(elemento != ''){ 
                    lista.splice(elemento,1);  // <----------- Borra un elemento
                    $('#mostrar').html("");
                    $('seleccion').empty();
                    for(var x=0; x<lista.length; x++){
                    $('#mostrar').append("["+ x +"]" + lista[x] + "<br>");
                    $('#seleccion').append('<option id="' + x + '">[' + x + ']' + lista[x] + '</option>');
                    }
                }else{
                    alert("No a colocado datos o dato correcto !!!");                    
                }
            });
           
            //---------------------Valor de select ------------------
            //Este es para obtener datos en tiempo real, click en uno de seleccion y la consola lo detecta
            $('#seleccion').on('change', function(){
                var dato1 = $('#seleccion').val();
                var dato2 = $('#seleccion option:selected').text();
                console.log(dato1 + ' || ' + dato2);
            });
        })
    </script>

</body>
</html>