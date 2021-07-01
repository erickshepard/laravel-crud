
<label for="Nombre">Nombre:</label>
<input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
<br>
<label for="ApellidoPaterno"> Apellido Paterno:</label>
<input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}" id="ApellidoPaterno">
<br>
<label for="ApellidoMaterno"> Apellido Materno:</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}">
<br>
<label for="Correo">Correo</label>
<input type="email" name="Correo" id="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:''}}">
<br>
<label for="Foto">Selecciona una foto:</label>
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto}}" width="50px" height="50px" alt="">
@endif
<input type="file" name="Foto" id="Foto" value="{{ isset($empleado->Foto)?$empleado->Foto:''}}">
<br>
<input type="submit" value="Guardar Datos">
<br>
<a href="{{ url('empleado/')}}">Regresar</a>