@section('content')
 @extends('adminlte::page') 
<div class="container">
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<form action="{{url('/devoluciones/'.$devolucion->id)}}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
     {{method_field('PATCH')}}

 <label for="fecha" class="control-label">{{'fecha'}} </label>
    <input type="date" class ="form-control " name="fecha" id="fecha" value="{{$devolucion->fecha}}">
      <br>
 <label for="estado"  class="control-label">{{'estado'}} </label>
    <input type="text" class ="form-control " name="estado" id="estado" value="{{$devolucion->estado}}">
     {{-- {!! $errors->first('marca','<div class="invalid-feedback">:message</div>')!!} --}}
      <br>
    <label for="descripcion"  class="control-label">{{'descripcion'}} </label>
    <input type="text" class ="form-control "  name="descripcion" id="descripcion" value="{{$devolucion->estado}}">
     {{-- {!! $errors->first('estado','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="modelo"  class="control-label">{{'modelo'}} </label>
    <input type="text" class ="form-control " name="modelo" id="modelo" value="{{$devolucion->modelo}}">
     {{-- {!! $errors->first('serial','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="serie"  class="control-label">{{'serie'}} </label>
    <input type="text" class ="form-control " name="serie" id="serie" value="{{$devolucion->serie}}">
     {{-- {!! $errors->first('serial','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>   
   <input type="submit" class="btn btn-success"value="Editar">
   <a href="{{url('devoluciones')}}" class="btn  btn-success">Regresar</a>
  </div>
  </form>
   @endsection