<?php
    include 'conectar.php';
    echo '<br>';
?>

<form action="index.php" method="GET" >
    <input type="hidden" name="opcion" value=1>
    
    <div>
        <label for="rubro">Rubro</label>
        <select name="rubro" id="rubro"  value="0">
            <option value=""> </option>          
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
    </div>
    <?='<br>'?>
    <div>
        <label for="marca">Marca</label>
        <select name="marca" id="marca" value="0">
            <option value=""> </option>
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
    </div>
    <?='<br>'?>
    <button type="submit">Consultar</button>
    
</form>