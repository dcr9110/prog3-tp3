<?php

    include 'conectar.php';
    
    if($conexion){

        $id_producto = $_GET['producto'];
        $id_cliente = $_GET['cliente'];

        
        $query = "SELECT nombre, cantidad, precio
                    FROM productos as p
                    WHERE p.id = $id_producto";

        $result_producto = mysqli_query( $conexion , $query );
        $result_producto = mysqli_fetch_assoc($result_producto);
        extract($result_producto);


        $query = "SELECT nombre as nombre_cliente,
                        apellido as apellido_cliente
                    FROM clientes
                    WHERE clientes.id = $id_cliente";
        
        $result_cliente = mysqli_query( $conexion , $query );
        $result_cliente = mysqli_fetch_assoc($result_cliente);
        extract($result_cliente);

        $nombre_cliente = $nombre_cliente.' '.$apellido_cliente;
    }
?>

<form action="grabar/grabar_venta.php" method="POST">
    
    <div>
        <label for="cliente">CLIENTE: <?= $nombre_cliente ?></label>
        <input type="hidden" name="cliente" value="<?= $id_cliente ?>">
    </div><br><br>    

    <div>
        <label for="nombre"> Nombre del producto: <?= $nombre ?> </label>
        <input type="hidden" name="producto" value="<?= $id_producto ?>">
    </div><br>

    <div>
        <label for="precio"> Precio de la unidad: <?= $precio ?> </label><br>
        <input type="hidden" name="precio" value="<?= $precio ?>">
    </div><br>
    
    <div>
        <label for="cantidad"> Cantidad disponible: <?=$cantidad?></label>
        <input type="number" name="cantidad" step="1" min="1" max="<?=$cantidad?>" REQUIRED>
    </div><br>

    <div>
        <label for="fecha">fecha</label>
        <input type="date" name="fecha" id="fecha" REQUIRED>
    </div><br>

    <button type="submit">Comprar</button>

</form>