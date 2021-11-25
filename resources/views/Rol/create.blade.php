<form action="{{ url('/Rol')}}" method="post" enctype="multipart/form-data">

<!--creacion de un token para seguridad-->
{{ csrf_field() }}

@include('Rol.form',['Modo'=>'crear'])

</form>