<?php

    if($_POST){
        include'../conectar.php';

        $tabla = $_POST['tabla'];
        $nombre = $_POST['nombre'];

        $query = "INSERT INTO $tabla 
                    SET nombre = '$nombre'";
        
        $result = mysqli_query($conexion, $query);

        if($result){
            header("Location: ../index.php?opcion=10&nombre=$tabla");
            die();
        
        }else{
            header("Location: ../index.php?opcion=11&nombre=$tabla");
            die();
        }
    }else{
        header("Location: ../index.php?opcion=11&nombre=$tabla");
        die();
    }

?>