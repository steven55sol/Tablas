<?php

if(!$_POST){
    header('Location:index.html');
}

$tabla = $_POST['tabla'];
$maximo = $_POST['maximo'];
$numero = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla del <?php echo $tabla ?></h1>
    <?php 
       while($numero <= $maximo){
        echo '<p>'. $tabla . ' * ' . $numero . ' = ' . $tabla * $numero . '</p>';
        $numero++;
       }
    ?>
</body>
</html>