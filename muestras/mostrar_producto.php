 <?php

include("conectar.php");

if($conexion){
    
    $condicion = 'activo = 1 ';

    if(isset($_GET['rubro'])||isset($_GET['marca'])){
        
        if($_GET['rubro']!=0){
            $id = $_GET['rubro'];
            $condicion = $condicion."&& p.id_rubro = $id";
        }
        
        if($_GET['marca']!=0){
            $id = $_GET['marca'];
            $condicion = $condicion." && p.id_marca = $id";
        }

    }elseif(isset($_GET['nombre'])){

        $nombre = $_GET['nombre'];
        $condicion = $condicion."&& p.nombre LIKE '%$nombre%'";
    
    }
    

    $query = "SELECT p.id, p.nombre, r.nombre as rubro, m.nombre as marca, p.precio, p.cantidad 
                FROM `productos`as p  
                    INNER JOIN `rubros` as r on p.id_rubro = r.id
                    INNER JOIN `marcas` as m on p.id_marca = m.id
                WHERE $condicion";
    
    $data = mysqli_query($conexion, $query);
    
    
    if($data){

        echo "<table border='1'>";
        echo'<tr>
                <td>ID</td> 
                <td>Nombre</td> 
                <td>Rubro</td>  
                <td>Marca</td>                 
                <td>Precio</td>
                <td>Cantidad</td> 
                <td>Acciones</td>  
            </tr>';
        while($producto = mysqli_fetch_assoc($data)){
            extract($producto);
            echo "
            <tr>
                <td>$id</td>
                <td>$nombre</td>
                <td>$rubro</td>
                <td>$marca</td>
                <td>$precio</td>
                <td>$cantidad</td>
                <td><a href='index.php?opcion=7&id=$id'>Detalle</a></td>
            </tr>
            ";
        }
        echo '</table>';

        mysqli_free_result($data);

    }else{
        echo 'No se encontro info';
    }
    

}

 ?>