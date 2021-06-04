@section('content')
 @extends('adminlte::page') 
<div class="container">
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
{{-- <a href="{{url('vehiculos/create')}}" class="btn btn-success">Agregar Dispositivo</a> --}}
<table class="table table-light table-hover">

      
      <thead class="thead-dark">
      <tr>
          <th>#</th>
          <th>fecha</th>
          <th>estado</th>
          <th>descripcion</th>
          <th>modelo</th>
          <th>serial</th>
          </tr>
    </thead>
    <tbody>
    @foreach($devoluciones as $devolucion)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$devolucion->fecha}}</td>
            <td>{{$devolucion->estado}}</td>
            <td>{{$devolucion->descripcion}}</td>
            <td>{{$devolucion->modelo}}</td>
            <td>{{$devolucion->serie}}</td>
          
               </td>
             <td><a class="btn btn-warning" href="{{ url('/devoluciones/'.$devolucion->id.'/edit') }}">
             Editar
            </a>
             <form action="{{url('/devoluciones/'.$devolucion->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
             {{method_field('DELETE')}}
             <button class="btn btn-danger" type="submit" onclick="return confirm('borrar?')">Borrar</button>
            </td>
            </tr>
     @endforeach       
    </tbody>
  <div>
 </table> 
 @endsection
