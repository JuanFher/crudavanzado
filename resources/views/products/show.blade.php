@extends('layouts.template')
@section('title', 'Ver Producto')
@section('styles')
  {{-- expr --}}
@endsection
@section('content')
     <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Producto: {{ $product->name }}
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Producto: {{ $product->name }}</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        <img src="/image/{{ $product->image }}" alt="{{ $product->name }}" width="300" height=100%/>
                        <p>Código: <strong>{{ $product->code }}</strong> </p>
                        <div class="d-flex justify-content-between">
                          <a href="{{ route('products.edit', $product) }}" class="btn btn-success">Editar</a>
                          @if ($product->status == 'ACTIVE')
                            <a href="#" class="btn btn-danger">DESACTIVAR</a>
                          @else
                            <a href="#" class="btn btn-success">ACTIVAR</a>
                          @endif
                          
                        </div>
                      </div>
                      
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Estado
                          </span>
                          <span class="float-right text-muted">
                          @if ($product->status == 'ACTIVE')
                            ACTIVO
                          @else
                            DESACTIVO
                          @endif
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Precio
                          </span>
                          <span class="float-right text-muted">
                            {{ $product->sell_price }}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Categoría
                          </span>
                          <span class="float-right text-muted">
                            {{ $product->category->name }}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Proveedor
                          </span>
                          <span class="float-right text-muted">
                            {{ $product->provider->name }}
                          </span>
                        </p>
                        
                      </div>
                      <a href="{{ route('products.index') }}" class="btn btn-primary btn-block">Regresar</a>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>Lista de Productos</h3>
                          <h3 class="ml-5">Stock Actual: {{ $product->stock }}</h3>
                        </div>
                        
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav profile-navbar">
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.create') }}">
                              <i class="fa fa-shopping-cart"></i>
                              Orden de compra
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="far fa-file-excel"></i>
                              Exportar
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="profile-feed">
                        
                        KARDEX
                        <div class="d-flex align-items-start profile-feed-item">
                          
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')
  <script src="{{asset ('assets/js/data-table.js')}}"></script>
@endsection