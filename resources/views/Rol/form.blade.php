
<Label for="Nombre">{{"Nombre"}}</label>
<input type="text" name="Nombre" id="Nombre"

value="{{ isset($Rol->nombre)?$Rol->nombre:'' }}">

<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
<a href="{{ url('Rol') }}">Regresar</a>


