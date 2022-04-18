@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}

<button type="button" class="close" data-diswiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif


 <a href="{{ url('usuarios/create') }}" class="btn btn-success" >Registrar usuario</a>
 <br/>
 <br/>
 <table class="table table-light">
     <thead class="thead-light">
         <tr>
             <th>#</th>
             <th>Nombre</th>
             <th>Apellido Paterno</th>
             <th>Apellido Materno</th>
             <th>Correo</th>
             <th>Acciones</th>
         </tr>
     </thead>

     <tbody>
         @foreach ($usuario as $usuarios)
         <tr>
             <td>{{ $usuarios->id }}</td>
             <td>{{ $usuarios->Nombre }}</td>
             <td>{{ $usuarios->ApellidoPaterno }}</td>
             <td>{{ $usuarios->ApellidoMaterno }}</td>
             <td>{{ $usuarios->Correo }}</td>
             <td>
                
                <a href="{{ url('/usuarios/'.$usuarios->id.'/edit') }}" class="btn btn-primary" >
                    Editar
                </a>
                

                |  


                <form action="{{ url('/usuarios/'.$usuarios->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-primary" type="submit" onclick="return confirm('¿Desea Borrar el Usuario?)" value="Borrar">
                </form>

             </td>
         </tr>
         @endforeach
     </tbody>

 </table>

</div>
@endsection