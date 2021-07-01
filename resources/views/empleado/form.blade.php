
<label for="Nombre">Nombre:</label>
<input type="text" name="Nombre" value="{{ $empleado->Nombre}}" id="Nombre">
<br>
<label for="ApellidoPaterno"> Apellido Paterno:</label>
<input type="text" name="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno}}" id="ApellidoPaterno">
<br>
<label for="ApellidoMaterno"> Apellido Materno:</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno}}">
<br>
<label for="Correo">Correo</label>
<input type="email" name="Correo" id="Correo" value="{{ $empleado->Correo}}">
<br>
<label for="Foto">Selecciona una foto:</label>
<img src="{{ $empleado->Foto}}" alt="">

<input type="file" name="Foto" id="Foto" value="{{ $empleado->Foto}}">
<br>
<input type="submit" value="Guardar Datos">