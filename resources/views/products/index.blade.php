@extends('layouts.template')
@section('title', 'Lista de Productos')
@section('styles')
  <style type="text/css">
    .unstyled-button{
      border: none;
      padding: 0;
      background: none;
    }
  </style>
@endsection
@section('content')
	<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Lista de Productos
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              @include('common.alerts')
              @include('common.messages')
              <div class="d-flex justify-content-between">
                <div>
                  <h3>Productos</h3>
                </div>
                <div>
                  <a href="#" class="btn btn-success">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></a >
                </div>
              </div><br>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>CÓDIGO</th>
                            <th>NOMBRE</th>
                            <th>STOCK</th>
                            <th>PRECIO</th>
                            <th>IMPUESTO</th>
                            <th>ESTADO</th>
                            <th>CATEGORÍA</th>
                            <th>PROVEEDOR</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                        	<tr>
                              
                            <td scope="row">{{ $product->code }}</td>
                            <td>
                              <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                              
                            </td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->sell_price }}</td>
                            
                            <td>{{ $product->status }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->provider->name }}</td>
                            <td>
                              {!! Form::open(['route' => ['products.destroy', $product ], 'method' => 'DELETE']) !!}
                                 <a href="{{ route('products.edit', $product) }}" title="Editar" class="jsgrid-button jsgrid-edit-button">
                                   <i class="far fa-edit"></i>
                                 </a>
                                 <button title="Eliminar" class="jsgrid-button jsgrid-delete-button unstyled-button">
                                   <i class="far fa-trash-alt" type="submit"></i>
                                 </button>
                              {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>

                  </div>
                  {{$products->links()}}
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')
	<script src="{{asset ('assets/js/data-table.js')}}"></script>
@endsection