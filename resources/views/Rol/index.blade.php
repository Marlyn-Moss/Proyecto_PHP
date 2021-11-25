

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif

<a href="{{ url('Rol/create') }}">Agregar Rol</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
        </tr>
    </thead>

    <tbody>
        @foreach($rols as $Rol)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$Rol->nombre}}</td>
            <td>
                <a href="{{ url('/Rol/'.$Rol->id.'/edit') }}">Editar</a>

            <form method="post" action="{{ url('/Rol/'.$Rol->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');" >Borrar</button>
                
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>