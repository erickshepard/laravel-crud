
<h1>{{$modo}} Empleado</h1>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    
</div>
   
@endif

<div class="form-group">
    <label for="Nombre">Nombre:</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
    
</div>
<div class="form-group">
    <label for="ApellidoPaterno"> Apellido Paterno:</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">
    
</div>

<div class="form-group">
    <label for="ApellidoMaterno"> Apellido Materno:</label>
    <input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
    
</div>
<div class="form-group">
    <label for="Correo">Correo</label>
    <input  class="form-control" type="email" name="Correo" id="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
    
</div>
<div class="form-group">
    <label for="Foto">Selecciona una foto:</label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" width="50px" height="50px" alt="">
    @endif
    <input  type="file" name="Foto" id="Foto" value="{{ isset($empleado->Foto)?$empleado->Foto:''}}">
    
</div>

<div class="form-group">
    <input  class="btn btn-success" type="submit" value="{{ $modo }} Datos">
    
    <a class="btn btn-primary" href="{{ url('empleado/')}}">Regresar</a>
</div>
