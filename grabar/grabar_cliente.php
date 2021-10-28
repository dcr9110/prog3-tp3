<?php

    include'../conectar.php';
    if($conexion){
        
        extract($_POST);
        
        $query = "INSERT INTO clientes
                    SET    nombre='$nombre',
                            apellido = '$apellido',
                            dni = $dni";
        

        $result = mysqli_query($conexion, $query);
        mysqli_close($conexion);

        if($result){
    
            header("Location: ../index.php?opcion=10&nombre=Cliente");
            die(); 
            
        }else{
            header("Location: ../index.php?opcion=11&nombre=Cliente+por+consulta");
            die(); 
        }

    }else{
        header("Location: ../index.php?opcion=11&nombre=Cliente+por+conexion");
        die();
    }
?>
