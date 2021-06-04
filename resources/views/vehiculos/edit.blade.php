{{-- @extends('layouts.app') --}}

@section('content')
 @extends('adminlte::page') 
<div class="container">
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<form action="{{url('/vehiculos/'.$vehiculo->id)}}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
     {{method_field('PATCH')}}

 <label for="placa" class="control-label">{{'placa'}} </label>
    <input type="text" class ="form-control " name="placa" id="placa" value="{{$vehiculo->placa}}">
      <br>
 <label for="llantas"  class="control-label">{{'llantas'}} </label>
    <input type="text" class ="form-control " class="form-control" name="llantas" id="llantas" value="{{$vehiculo->llantas}}">
     {{-- {!! $errors->first('marca','<div class="invalid-feedback">:message</div>')!!} --}}
      <br>
    <label for="puertas"  class="control-label">{{'puertas'}} </label>
    <input type="text" class ="form-control " class="form-control" name="puertas" id="puertas" value="{{$vehiculo->puertas}}">
     {{-- {!! $errors->first('serial','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="cogineria"  class="control-label">{{'cogineria'}} </label>
    <input type="text" class ="form-control " class="form-control" name="cogineria" id="cogineria" value="{{$vehiculo->cogineria}}">
     {{-- {!! $errors->first('estado','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="motor"  class="control-label">{{'motor'}} </label>
    <input type="text" class ="form-control" class="form-control" name="motor" id="motor" value="{{$vehiculo->motor}}">
     {{-- {!! $errors->first('caracteristicas','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="luces"  class="control-label">{{'luces'}} </label>
    <input type="text" class ="form-control"  class="form-control" name="luces" id="luces" value="{{$vehiculo->luces}}">
     {{-- {!! $errors->first('precio_compra','<div class="invalid-feedback">:message</div>')!!} --}}
     <br>
    <label for="sonido"  class="control-label">{{'sonido'}} </label>
    <input type="text" class ="form-control"  class="form-control" name="sonido" id="sonido" value="{{$vehiculo->sonido}}">
     {{-- {!! $errors->first('precio_compra','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="Foto"  class="control-label">{{'foto'}} </label>
    <input type="file" name="foto" id="foto" value="">
     @if(isset($vehiculo->foto))
      {!! $errors->first('foto','<div class="invalid-feedback">:message</div>')!!} 
    <br>
     <img src="{{ asset('storage').'/'.$vehiculo->foto}}" alt="" width="150">
    <br>
    @endif 
    <br>
    
   <input type="submit" class="btn btn-success"value="Editar">
   <a href="{{url('vehiculos')}}" class="btn  btn-success">Regresar</a>
  </div>
  </form>
   @endsection