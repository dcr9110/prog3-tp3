<?php

$opcion = 0;
if( isset($_GET['opcion']))
{
	$opcion = $_GET['opcion'];	
    
    if(isset($_GET['id'])){

        $id = $_GET['id'];
    }
}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/sitio.css">

</head>
<body>
    <div id="contenedor">

        <?php
          include("extructura/cabecera.php");
          
          echo "<div id='centro'>";
          
          include("extructura/menu.php");
          
          include("extructura/contenido.php");
        
          echo '</div>';
          include("extructura/pie.php");
        
          ?>

    </div>
</body>
</html>