{{-- 
@extends('layouts.app') --}}

@section('content')

<div class="container">

@extends('adminlte::page')
Seccion para crear empleados 

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

    <form action="{{url('/inventarios')}}" method="post" enctype="multipart/form-data">
    <br>

    {{ csrf_field() }}
     <div class="form-group">

     <label for="cantidad" class="control-label">{{'cantidad'}} </label>
    <input type="text" class ="form-control {{$errors->has('cantidad')?'is-invalid':''}}" name="cantidad" id="cantidad" 
    value="">
    {!!$errors->first('cantidad','<div class="invalid-feedback">:message</div>')!!}
      <br>
 <label for="Modelo" class="control-label">{{'modelo'}} </label>
    <input type="text" class ="form-control {{$errors->has('modelo')?'is-invalid':''}}" name="modelo" id="modelo" 
    value="">
    {!!$errors->first('modelo','<div class="invalid-feedback">:message</div>')!!}
      <br>
   <label for="Marca"  class="control-label">{{'marca'}} </label>
    <input type="text" class ="form-control {{$errors->has('marca')?'is-invalid':''}}" name="marca" id="marca" value="">
     {!! $errors->first('marca','<div class="invalid-feedback">:message</div>')!!} 
      <br>
    <label for="Serial"  class="control-label">{{'serial'}} </label>
    <input type="text" class ="form-control {{$errors->has('serial')?'is-invalid':''}}" name="serial" id="serial" value="">
      {!! $errors->first('serial','<div class="invalid-feedback">:message</div>')!!}     
      <br>
    <label for="Estado"  class="control-label">{{'estado'}} </label>
    <input type="text" class ="form-control {{$errors->has('serial')?'is-invalid':''}}" name="estado" id="estado" value="">
      {!! $errors->first('estado','<div class="invalid-feedback">:message</div>')!!}     
      <br>
    <label for="Caracteristicas"  class="control-label">{{'caracteristicas'}} </label>
    <input type="text" class ="form-control {{$errors->has('caracteristicas')?'is-invalid':''}}"  name="caracteristicas" id="caracteristicas" value="">
      {!! $errors->first('caracteristicas','<div class="invalid-feedback">:message</div>')!!}
      <br>
    <label for="Precio_compra"  class="control-label">{{'precio_compra'}} </label>
    <input type="text" class ="form-control {{$errors->has('precio_compra')?'is-invalid':''}}"  name="precio_compra" id="precio_compra" value="">
      {!! $errors->first('precio_compra','<div class="invalid-feedback">:message</div>')!!} 
    <br>
    <label for="Foto"  class="control-label">{{'foto'}} </label>
   
     <input type="file" class ="form-control {{$errors->has('foto')?'is-invalid':''}}" name="foto" id="foto" value="">
      {!! $errors->first('foto','<div class="invalid-feedback">:message</div>')!!} 
    <br> 
    
   <input type="submit" class="btn btn-success"value="Crear">
  
</form>
</div>               
    {{-- @include('inventarios.form',['Modo'=>'crear']) --}}
   </form>
   </div>               
@endsection