<?php
    var_dump($_POST);

    include('../conectar.php');

    if($conexion){
        
        extract($_POST);

        $query = "SELECT cantidad 
                    FROM productos
                    WHERE productos.id = $producto";
        
        $result_cantidad = mysqli_query($conexion, $query);
        $producto_cantidad = mysqli_fetch_assoc($result_cantidad);
        
        if($producto_cantidad >= $cantidad){

            $precio = $precio * $cantidad;
    
            $query = "INSERT INTO ventas 
                        SET fecha = '$fecha',
                            id_producto = $producto,
                            id_cliente = $cliente,
                            precio = $precio,
                            cantidad = $cantidad";
        
           
            $result = mysqli_query($conexion, $query);
    
            if($result){

                $query = "UPDATE productos
                            SET cantidad = cantidad - $cantidad
                            WHERE id = $producto"; 
                
                $result = mysqli_query($conexion, $query);

                mysqli_close($conexion);
    
                if($result){
                        
                    header("Location: ../index.php?opcion=10&nombre=Venta");
                     die(); 
            
                }else{
                        
                    header("Location: ../index.php?opcion=11&nombre=Venta");
                    die(); 
                }
            }else {
                
                header("Location: ../index.php?opcion=11&nombre=Venta");
                die();
            }

        }

    }
?>