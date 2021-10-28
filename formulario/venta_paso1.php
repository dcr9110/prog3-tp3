<?php 
    include 'conectar.php';
    if(!$conexion){
        echo 'Error de conexion';
        exit();
    }else{

        $query_producto = "SELECT nombre, id 
                                FROM productos";

        $query_cliente = "SELECT nombre, id
                            FROM clientes";
                        
    }


?>

<form action="index.php" method="GET">

    <input type="hidden" name="opcion" value="15">
    
    <div>
        <label for="cliente">Cliente</label>
        <select name="cliente" id="cliente" REQUIRED>
            <?php
                    
                $result = mysqli_query($conexion, $query_cliente);
                
                foreach( $result as $opcion):
            ?>
            <option value="<?=$opcion['id']?>"><?=$opcion['nombre']?></option>
            <?php endforeach ?>
        </select>
    </div><br>

    <div>
        <label for="producto">Producto</label>
        <select name="producto" id="producto" REQUIRED>
            <?php
                $result_producto = mysqli_query($conexion, $query_producto);
                foreach( $result_producto as $opcion):
            ?>
            <option value="<?=$opcion['id']?>"><?=$opcion['nombre']?></option>
                <?php endforeach ?>
        </select>
    </div><br>

    <button type="submit">Continuar</button>
    
</form>