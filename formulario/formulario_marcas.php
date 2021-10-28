<form action="grabar/grabar.php" method="POST">
    
    <div>
        <input type="hidden" name="tabla" value="marcas">
    </div>
    
    <div>
        <label for="nombre">Nombre de la marca</label>
        <br><br>
        <input type="text" name="nombre" id="nombre" REQUIRED>
    </div>
    <br>
    
    <button type="submit">Guardar</button>
    
</form>