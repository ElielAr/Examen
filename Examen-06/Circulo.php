
<?php
    $radio =isset($_GET['radio'])? $_GET['radio']:null;

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
    
<h1> Circulo </h1>

<form action="Circulo.php" method="GET">

    <input type="text" placeholder="Inserte aca Radio"name="radio" id="radio">
    <input type="submit" value="calcular">
    <?php
    $area = (3.1416*($radio*$radio)); 
    echo 'El AREA ES:'.$area.'<br>';
   
    ?>
     

</form>




</body>
</html>

