

{{-- @extends('layouts.app') --}}

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
          <th>placas</th>
          <th>llantas</th>
          <th>puertas</th>
          <th>cogineria</th>
          <th>Modelo motor</th>
          <th>luces</th>
          <th>sonido</th>
          <th>foto</th>
          </tr>
    </thead>
    <tbody>
    @foreach($vehiculos as $vehiculo)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$vehiculo->placas}}</td>
            <td>{{$vehiculo->llantas}}</td>
            <td>{{$vehiculo->puertas}}</td>
            <td>{{$vehiculo->cogineria}}</td>
            <td>{{$vehiculo->motor}}</td>
            <td>{{$vehiculo->luces}}</td>
            <td>{{$vehiculo->sonido}}</td>
             <td>
             <img src="{{asset('storage').'/'.$vehiculo->foto}}" alt="" width="100">
             </td>
             <td><a class="btn btn-warning" href="{{ url('/vehiculos/'.$vehiculo->id.'/edit') }}">
             Editar
            </a>
             <form action="{{url('/vehiculos/'.$vehiculo->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
             {{method_field('DELETE')}}
             <button type="submit" class="btn btn-danger" onclick="return confirm('borrar?')">Borrar</button>
            </td>
            </tr>
     @endforeach       
    </tbody>
  <div>
 </table> 
 @endsection
