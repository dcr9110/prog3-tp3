<div id="formularios">
    
    <form action="grabar/grabar_cliente.php" method="POST">
    
        <div>
            <label for="nombre">Nombre</label>
            <br>
            <input type="text" name="nombre" id="nombre" REQUIRED>
        </div><br>
    
        <div>
            <label for="apellido">Apellido</label>
            <br>
            <input type="text" name="apellido" id="apellido" REQUIRED>
        </div><br>
    
        <div>
            <label for="dni">DNI</label>
            <br>
            <input type="number" name="dni" id="dni" step="1" min="1000000" max="100000000" REQUIRED>
        </div><br>

        <button type="submit">Guardar</button>
    
    </form>

</div>