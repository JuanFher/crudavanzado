@extends('layouts.template')
@section('title', 'Registrar Compra')
@section('styles')
  <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
@endsection
@section('content')
	<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Ingreso de Compra
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear Nueva</li>
              </ol>
            </nav>
          </div>
          @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
          <div class="card">
            <div class="card-body">
              {!! Form::open(['route'=>'purchases.store', 'method'=>'POST']) !!}
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de compra</h4>
                    </div>
                    
                    
                  
                  
                </div>
               
               
                {!! Form::close() !!}
            </div>
          </div>
        </div>
@endsection
@section('scripts')
    {!! Html::script('assets/js/select2.js') !!}
    {!! Html::script('assets/js/alerts.js') !!}
    {!! Html::script('assets/js/avgrund.js') !!}
    {!! Html::script('assets/js/toastr.min.js') !!}

{{-- <script type="text/javascript">
  window.addEventListener('alertaerrores', event =>{
    toastr.error("ingrese datos en todos los campos", "Agregar Item",{
      "timeOut": "3000"
    });
  });

  window.addEventListener('productoagregado', event =>{
    toastr.success("Producto agregado", "Administracion",{
      "timeOut": "3000"
    });
  });
  window.addEventListener('productoeliminado', event =>{
    toastr.success("Producto Eliminado", "Administracion",{
      "timeOut": "3000"
    });
  });

</script> --}}
@endsection
