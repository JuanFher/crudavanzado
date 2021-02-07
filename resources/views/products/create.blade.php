@extends('layouts.template')
@section('title', 'Registrar Producto')
@section('content')
	<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Crear Producto
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear Nueva</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              @include('common.alerts')
              @include('common.messages')

              <div class="row">
                  <div class="col-12">
                  	{!! Form::open(['route' => 'products.store', 'method' => 'POST', 'files' => true]) !!}
	                     <div class="form-control">
                          <div class="row">
                            <div class="col-lg-2 grid-margin grid-margin-lg-0">
                              <div class="form-group">
                                      <label for="code"><strong>Código</strong></label>
                                      <input type="text" value="{{old('code')}}" name="code" id="code" class="form-control" placeholder="Ingrese el código del Producto" autofocus required>
                                    </div>
                            </div>
                            <div class="col-lg-6 grid-margin grid-margin-lg-0">
                                <div class="form-group">
                                      <label for="name"><strong>Nombre</strong></label>
                                      <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control" placeholder="Ingrese el nombre del Producto" autofocus required>
                                    </div>
                            </div>
                            <div class="col-lg-4 grid-margin grid-margin-lg-0">
                                  <div class="form-group">
                                          <label for="provider_id"><strong>Proveedor</strong></label>
                                          <select name="provider_id" class="form-control form-control-lg">
                                            <option>--- Seleccione uno ---</option>
                                            @foreach ($providers as $provier)
                                              <option value="{{ $provier->id }}">{{ $provier->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                      <label for="stock"><strong>Stock</strong></label>
                                      <input type="number" value="{{old('stock')}}" name="stock" id="stock" class="form-control" placeholder="Ingrese el stock del Producto" required>
                                    </div>
                            </div>
                            <div class="col-lg-3 grid-margin grid-margin-lg-0">
                                <div class="form-group">
                                      <label for="buy_price"><strong>Precio de compra</strong></label>
                                      <input type="number" value="{{old('buy_price')}}" name="buy_price" id="buy_price" class="form-control" placeholder="Ingrese el valor del Producto" required>
                                    </div>
                            </div>
                            <div class="col-lg-3 grid-margin grid-margin-lg-0">
                                <div class="form-group">
                                      <label for="sell_price"><strong>Precio de venta</strong></label>
                                      <input type="number" value="{{old('sell_price')}}" name="sell_price" id="sell_price" class="form-control" placeholder="Ingrese el valor del Producto" required>
                                    </div>
                            </div>
                            
                                
                                
                                <div class="col-lg-3">
                                  <div class="form-group">
                                          <label for="category_id"><strong>Categoría</strong></label>
                                          <select name="category_id" class="form-control form-control-lg">
                                            <option>--- Seleccione uno ---</option>
                                             @foreach ($categories as $category)
                                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title d-flex">Imagen del producto
                                      
                                    </h4>
                                    <input name="picture" id="picture" type="file" class="dropify" />
                                  </div>
                              
                          </div>
                        </div>
                        
	                     <div class="form-group mt-2 mr-2">
								    <a href="{{ route('products.index') }}" class="btn btn-light">Regresar</a>
								    <button type="submit" class="btn btn-primary">Guardar</button>
							   </div>
						   {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')
  <script src="{{asset('assets/js/dropify.js')}}"></script>
@endsection