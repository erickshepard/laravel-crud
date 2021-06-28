Formulario de creacion de empleado
<!--enctype - nos permite enviar fotos-->
<form action="" method="post" enctype="multipart/form-data">
    <label for="Nombre">Nombre:</label>
    <input type="text" name="Nombre">
    <br>
    <label for="ApellidoPaterno"> Apellido Paterno:</label>
    <input type="text" name="ApellidoPaterno">
    <br>
    <label for="ApellidoMaterno"> Apellido Materno:</label>
    <input type="text" name="ApellidoMaterno">
    <br>
    <label for="Correo">Correo</label>
    <input type="email" name="Correo">
    <br>
    <label for="Foto">Selecciona una foto:</label>
    <input type="file" name="Foto">
    <br>
    <input type="submit" name="Enviar">
</form>