
<?php
    $base =isset($_GET['base'])? $_GET['base']:null;
    $altura=isset($_GET['altura'])? $_GET['altura']:null;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1> Triangulo </h1>

<form action="Rectangulo.php" method="GET">

    <input type="text" placeholder="Inserte Base" name="base" id="base">
    <input type="text" placeholder="Inserte Altura" name="altura" id="altura">
    <input type="submit" value="calcular">
    <?php
    $area = $base*$altura; 
    echo 'El AREA ES:'.$area.'<br>';
   
    ?>
     

</form>




</body>
</html>







