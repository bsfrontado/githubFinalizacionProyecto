

{{-- @extends('layouts.app') --}}

@section('content')
 @extends('adminlte::page') 
<div class="container">
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<div class="container">
<form action="{{url('/vehiculos/')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{-- {{method_field('PATCH')}} --}}
{{-- <div class="form-group"> --}}

 <label for="placa" class="control-label">{{'placa'}} </label>
    <input type="text" class ="form-control " name="placa" id="placa" value="">
      <br>
 <label for="llantas"  class="control-label">{{'llantas'}} </label>
    <input type="text" class ="form-control " class="form-control" name="llantas" id="llantas" value="">
     {{-- {!! $errors->first('marca','<div class="invalid-feedback">:message</div>')!!} --}}
      <br>
    <label for="puertas"  class="control-label">{{'puertas'}} </label>
    <input type="text" class ="form-control " class="form-control" name="puertas" id="puertas" value="">
     {{-- {!! $errors->first('serial','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="cogineria"  class="control-label">{{'cogineria'}} </label>
    <input type="text" class ="form-control " class="form-control" name="cogineria" id="cogineria" value="">
     {{-- {!! $errors->first('estado','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="motor"  class="control-label">{{'motor'}} </label>
    <input type="text" class ="form-control" class="form-control" name="motor" id="motor" value="">
     {{-- {!! $errors->first('caracteristicas','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="luces"  class="control-label">{{'luces'}} </label>
    <input type="text" class ="form-control"  class="form-control" name="luces" id="luces" value="">
     {{-- {!! $errors->first('precio_compra','<div class="invalid-feedback">:message</div>')!!} --}}
     <br>
    <label for="sonido"  class="control-label">{{'sonido'}} </label>
    <input type="text" class ="form-control"  class="form-control" name="sonido" id="sonido" value="">
     {{-- {!! $errors->first('precio_compra','<div class="invalid-feedback">:message</div>')!!} --}}
    <br>
    <label for="Foto"  class="control-label">{{'foto'}} </label>
    <input type="file" name="foto" id="foto" value="">
    <br>
    <br>
   <input type="submit" class="btn btn-success"value="Create">
   <a href="{{url('vehiculos')}}" class="btn  btn-success">Regresar</a>
  </div>
</form>
 @endsection