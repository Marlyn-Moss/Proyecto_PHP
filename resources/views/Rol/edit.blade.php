<form action="{{ url('/Rol/'.$Rol->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('Rol.form',['Modo'=>'editar'])

</form>
