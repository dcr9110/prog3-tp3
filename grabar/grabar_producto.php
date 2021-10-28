<?php
    if($_POST){

        include("../conectar.php");
        extract($_POST);
        
    }else{
        echo 'no contiene informacion';
        exit();
    }
    if($conexion){

        if($id == 0){

            $query = "INSERT INTO productos 
                        SET 
                                nombre = '$nombre',
                                id_rubro = '$rubro',
                                id_marca = '$marca',
                                precio = '$precio',
                                cantidad = '$cantidad',
                                activo = 1";
                
        }else{
            $query = "UPDATE productos
                        SET 
                                nombre = '$nombre',
                                id_rubro = '$rubro',
                                id_marca = '$marca',
                                precio = '$precio',
                                cantidad = '$cantidad'
                        WHERE   id = '$id'";
        }


        $resultado = mysqli_query($conexion, $query);
        mysqli_close($conexion); 
        
        if($resultado){
    
            header("Location: ../index.php?opcion=10&nombre=Producto");
            die(); 
            
        }else{
            header("Location: ../index.php?opcion=11&nombre=Producto");
            die();
        }
    
    }else{
        header("Location: ../index.php?opcion=11&nombre=Producto");
        die();

    }

?>