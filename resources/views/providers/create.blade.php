@extends('layouts.template')
@section('title', 'Registrar Proveedor')
@section('content')
	<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Crear Proveedor
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">Proveedors</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear Nueva</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              {{-- <h4 class="card-title">Proveedors</h4> --}}

              <div class="row">
                  <div class="col-12">
                  	{!! Form::open(['route' => 'providers.store', 'method' => 'POST']) !!}
	                     @include('providers.form')
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