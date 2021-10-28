<?php

    include'conectar.php';

    if(isset($_GET['id'])){

        include'modificar_producto.php';
        
    }else{
        $id = 0;
        $nombre =  'nombre';
        $id_marca = 1;
        $id_rubro =1;
        $precio = 0;
        $cantidad = 0;
    }

?>


<form action="grabar/grabar_producto.php" method="POST">
    
    <div>
        <input type="hidden" name="id" value="<?=$id?>">
    </div>
    
    <div>
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre" id="nombre" value=" <?= $nombre ?> " REQUIRED>
    </div><br>
    
    <div>
        <label for="rubro">Rubro</label>
        <br>
        <select name="rubro" id="rubro"  value="    <?= $id_rubro ?>">
            <?php
                $query = "SELECT * FROM rubros";
                $result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
                foreach($result as $opcion):
            ?>
                    <option value="<?= $opcion['id']; ?>">
                        <?= $opcion['nombre']; ?>
                    </option>

            <?php endforeach ?>
        </select>
    </div><br>
    
    <div>
        <label for="marca">Marca</label>
        <br>
        <select name="marca" id="marca" value="<?= $id_marca ?>">
            <?php
                $query = "SELECT * FROM marcas";
                $result = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

                foreach($result as $opcion):
            ?>
                    <option value="<?= $opcion['id']; ?>">
                        <?= $opcion['nombre']; ?>
                    </option>

            <?php endforeach ?>
        </select>
    </div><br>

    <div>
        <label for="precio">Precio</label>
        <br>
        <input type="number" name="precio" id="precio" value="<?=$precio?>">
    </div><br>
    
    <div>
        <label for="cantidad">Cantidad</label>
        <br>
        <input type="number" step="1" min="1" name="cantidad" id="cantidad" value="<?=$cantidad?>">
    </div><br>
    
    <button type="submit">Guardar</button>

</form>