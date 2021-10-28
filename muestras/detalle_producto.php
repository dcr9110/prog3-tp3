<?php
//http://localhost/prog3/empresa/detalle_producto.php?id=1
    include 'conectar.php';

    if(!$conexion){
        echo 'Error al conectar';
        exit();
    }

    $id = $_GET['id'];
    $query = "SELECT p.id,
                     p.nombre,
                     r.nombre as rubro,
                     m.nombre as marca,
                     p.cantidad
              FROM productos as p
                    INNER JOIN rubros as r on p.id_rubro=r.id
                    INNER JOIN marcas as m on p.id_rubro=m.id
              WHERE p.id= $id";
    
    $datos = mysqli_query($conexion, $query);

    if(!$datos){
        echo 'No se puede hacer el detalle <br>';
        echo msqli_error($conexion);
        exit();
    }

    $producto = mysqli_fetch_assoc($datos);

    extract($producto);

    mysqli_free_result($datos);
    mysqli_close($conexion);
?>

<table border="1">
    <tr>
        <td>ID</td>
        <td><?php echo $id ?></td>
    </tr>

    <tr>
        <td>Nombre</td>
        <td><?php echo $nombre ?></td>
    </tr>
    
    <tr>
        <td>Marca</td>
        <td><?php echo $rubro ?></td>
    </tr>
    
    <tr>
        <td>Precio</td>
        <td><?php echo $marca ?></td>
    </tr>
    
    <tr>
        <td>Cantidad</td>
        <td><?= $cantidad ?></td>
    </tr>
</table>

<a href="index.php?opcion=6&id=<?=$id?>">Editar</a>
<a href="grabar/borrar_productos.php?id=<?=$id?>&nombre=productos">Borrar</a>