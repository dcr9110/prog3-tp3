<?php
    include('conectar.php');
    if($conexion){

        $query = "SELECT v.id as id, c.nombre as cliente,
                         p.nombre as producto, v.precio as precio,
                         v.cantidad as cantidad, v.fecha as fecha
                    FROM ventas as v
                            INNER JOIN clientes as c ON v.id_cliente = c.id
                            INNER JOIN productos as p ON v.id_producto = p.id";

        $result = mysqli_query($conexion, $query);       
    }else{
        echo 'Error de conexion';
    }
?>


<table border=1>
    <tr>
        <td>ID</td>
        <td>CLIENTE</td>
        <td>PRODUCTO</td>
        <td>PRECIO</td>
        <td>CANTIDAD</td>
        <td>FECHA</td>
    </tr>
    
    <?php while( $lista = mysqli_fetch_assoc($result)){
        extract($lista);
    ?>
            <tr>
                <td><?=$id?></td>
                <td><?=$cliente?></td>
                <td><?=$producto?></td>
                <td><?=$precio?></td>
                <td><?=$cantidad?></td>
                <td><?=$fecha?></td>
            </tr>
    
    <?php } ?>

</table>