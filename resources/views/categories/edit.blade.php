@extends('layouts.template')
@section('title', 'Registrar Categoría')
@section('content')
	<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Editar Categoría {{$category->name}}
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categorías</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear Nueva</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              {{-- <h4 class="card-title">Categorías</h4> --}}

              <div class="row">
                  <div class="col-12">
                  	{!! Form::model($category, ['route' => ['categories.update', $category], 'method' => 'PUT']) !!}
	                     <div class="form-group">
			                  <label for="name"><strong>Nombre</strong></label>
			                  <input type="text" value="{{$category->name}}" name="name" id="name" class="form-control" placeholder="Ingrese el nombre de la categoría" autofocus required>
			                </div>
			                <div class="form-group">
			                  <label for="description"><strong>Descripción</strong></label>
			                  <input type="text" name="description" value="{{$category->description}}" id="description" class="form-control" placeholder="Ingrese una descripción de la categoría">
			                </div>
	                     <div class="form-group mr-2">
      								    <a href="{{ route('categories.index') }}" class="btn btn-light">Regresar</a>
      								    <button type="submit" class="btn btn-primary">Guardar</button>
      							   </div>
      						   {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection