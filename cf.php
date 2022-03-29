<?php
$v1 = 0;
$v2 = 1;
$v3 = $_POST ['fibo'];
$v4;

echo $v1.",".$v2;
for ($i=3;$i<=$v3;$i++)
{
  $v4=$v1+$v2;
  $v1=$v2;
  $v2=$v4;
  echo ",".$v4;  
}

?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">regresar a menu principal</a>
</body>
</html>