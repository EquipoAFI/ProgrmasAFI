<?php
$arreglo = array(30,58,83,5,70);
$v1 = burbuja($arreglo,sizeof($arreglo));

for($i=0;$i<sizeof($v1);$i++)
echo $v1[$i]."\n";

function burbuja($a,$n)
{
    for($i=1;$i<$n;$i++)
    {
        for($j=0;$j<$n-$i;$j++)
        {
            if($a[$j]>$a[$j+1])
            {
                $k=$a[$j+1];
                $a[$j+1]=$a[$j];
                $a[$j]=$k;
            }
        }
    }
    return $a;
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