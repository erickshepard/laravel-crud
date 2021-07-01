Formulario de creacion de empleado
<!--enctype - nos permite enviar fotos-->
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!--carpeta.vista-->
   @include('empleado.form')
</form>