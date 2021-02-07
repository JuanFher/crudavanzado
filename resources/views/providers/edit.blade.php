@extends('layouts.template')
@section('title', 'Editar Proveedor')
@section('content')
	<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Editar Proveedor {{$provider->name}}
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">Proveedors</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar {{$provider->name}}</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              {{-- <h4 class="card-title">Proveedors</h4> --}}

              <div class="row">
                  <div class="col-12">
                  	{!! Form::model($provider, ['route' => ['providers.update', $provider], 'method' => 'PUT']) !!}
	                     <div class="form-group">
			                  <label for="name"><strong>Nombre</strong></label>
			                  <input type="text" value="{{$provider->name}}" name="name" id="name" class="form-control" placeholder="Ingrese el nombre de la Proveedor" autofocus required>
			                </div>
                      <div class="form-group">
                        <label for="ruc_number"><strong>RUC</strong></label>
                        <input type="number" value="{{$provider->ruc_number}}" name="ruc_number" id="ruc_number" class="form-control" placeholder="Ingrese el RUC del Proveedor" required>
                      </div>
                      <div class="form-group">
                        <label for="email"><strong>Email</strong></label>
                        <input type="email" value="{{$provider->email}}" name="email" id="email" class="form-control" placeholder="Ingrese el email del Proveedor" required>
                      </div>
                      <div class="form-group">
                        <label for="address"><strong>Dirección</strong></label>
                        <input type="text" value="{{$provider->address}}" name="address" id="address" class="form-control" placeholder="Ingrese la dirección del Proveedor" required>
                      </div>
			                <div class="form-group">
			                  <label for="phone"><strong>Teléfono</strong></label>
			                  <input type="text" name="phone" value="{{$provider->phone}}" id="phone" class="form-control" placeholder="Ingrese un número de teléfono del Proveedor">
			                </div>
	                     <div class="form-group mr-2">
      								    <a href="{{ route('providers.index') }}" class="btn btn-light">Regresar</a>
      								    <button type="submit" class="btn btn-primary">Guardar</button>
      							   </div>
      						   {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection