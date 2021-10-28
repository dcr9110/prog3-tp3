<?php

    $id = $_GET['id'];
    $query = "SELECT * 
                FROM productos 
                WHERE id = $id";
    $datos = mysqli_query($conexion, $query);

    if(!$datos){
        echo 'Error accediendo a los datos del producto';
        exit();
    }

    $producto = mysqli_fetch_assoc($datos);
    extract($producto);

?>