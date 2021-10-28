<?php

    switch( $opcion ){

        case 1:
            include("muestras/mostrar_producto.php");
            include('formulario/form_muestra.php');
            include('formulario/form_pornombre.php');
            break;

        case 2:
            include("formulario/formulario_clientes.php");
            break;

        case 3:
            include("formulario/formulario_rubros.php ");
            break;

        case 4:
            include("formulario/formulario_marcas.php ");
            break;

        case 5:
            include("formulario/venta_paso1.php ");
            include('muestras/mostrar_ventas.php');
            break;

        case 6:
            include("formulario/formulario_productos.php");
            break;

        case 7:
            include("muestras/detalle_producto.php");
            break;

        case 8:
            break;
            include("muestras/detalle_producto.php");
        
        
        
        case 10:
            $nombre = $_GET['nombre'];
            echo "Grabado correcto de $nombre";
            break;

        case 11:
            $nombre = $_GET['nombre'];
            echo "NO se pudo grabar el registro $nombre";
            break;
        
        case 15:
            include ('formulario/venta_paso2.php');
            break;

        default:
    }

?>