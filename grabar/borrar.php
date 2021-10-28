<?php

    if(isset($_GET)){

        $table = $_GET['nombre'];
        $id = $_GET['id'];

        include '../conectar.php';
        
        $query = "UPDATE $table 
                    SET activo = 0
                    WHERE id = $id";

        $result = mysqli_query($conexion, $query);

        if($result){
            header("Location: ../index.php?opcion=10");
            die();
        
        }else{
            header("Location: ../index.php?opcion=11");
            die();
        }
    }

?>