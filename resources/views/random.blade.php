<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
    //Creamos una funcion generarAleatorio que dentro de la misma se le asigna un rango con el valor max y min
    //Con floor redondeamos hacia abajo
    //Lo que genere en math random y se multiplica el valor  por la resta entre el valor maximo por el minimo
    //Finalmente se suma con el valor minimo para tener la base
        const generarAleatorio = (min, max) =>{
            return Math.floor(Math.random() * (max - min)) + min;//
        }
        for (let x = 0; x <= 100; x++){
            alert(generarAleatorio(10,20));
        }
        //El valor maximo es 20 y valor minimo es 10
        //Se va generar un numero aleatorio entre 0 y 1
        //Por ejemplo 0.55
        //Lo que se multiplica el resultado de la resta entre maximo y el minimo que en este caso seria 20-10= 10
        //Nos da como resultado (0.55*10)=5.5 y se le suma 10 que da un valor de 15.5
        //Con el metodo math floor redondea hacia abajo que el resultado final es 15
    </script>;
</body>
</html>