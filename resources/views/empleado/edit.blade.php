<h3>Formulario de edición de empleado</h3>
<form action="{{ url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('empleado.form',['modo'=>'Editar']);

</form>
