<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="interfaz.css">
    <title>Document</title>
</head>
<body>
    <h1>Programas "Fibonazi && Burbuja"de servicios web</h1>
    <form action="cf.php" method="POST">

       <h2>Serie Fibonazi</h2>
        <LABEl>Ingresa la cantidad de numeros que aparezcan de la serie </LABEl>
        <br>
        <input type="text" name="fibo" placeholder="Ingresa la cantidad de numeros">
        <br>
        <button type="submit" value="aceptar" name="boton">Invocar</button>

    </form>

    <form action="cb.php" method="POST">

    <h2>Metodo de la burbuja</h2>
    <LABEl>En este progrma ordenara por el Metodo de la burbuja 5 numeros </LABEl>
   <br>
   <button type="submit" value="aceptar" name="boton1">Invocar</button>

</form>

</body>
</html>