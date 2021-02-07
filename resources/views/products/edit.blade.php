@extends('layouts.template')
@section('title', 'Editar Producto')
@section('styles')
  <link rel="stylesheet" href="{{asset('assets/vendors/lightgallery/css/lightgallery.css') }}">
@endsection
@section('content')
  <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Editar Producto
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar {{$product->name}}</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              {{-- <h4 class="card-title">Productos</h4> --}}

              <div class="row">
                  <div class="col-12">
                    {!! Form::model($product, ['route' => ['products.update', $product], 'method' => 'PUT', 'files' => true]) !!}
                       <div class="form-control">
                          <div class="row">
                            <div class="col-lg-2 grid-margin grid-margin-lg-0">
                              <div class="form-group">
                                      <label for="code"><strong>Code</strong></label>
                                      <input type="text" value="{{ $product->code }}" name="code" id="code" class="form-control" placeholder="Ingrese el nombre de la Producto" autofocus required>
                                    </div>
                            </div>
                            <div class="col-lg-6 grid-margin grid-margin-lg-0">
                              <div class="form-group">
                                      <label for="name"><strong>Nombre</strong></label>
                                      <input type="text" value="{{$product->name}}" name="name" id="name" class="form-control" placeholder="Ingrese el nombre de la Producto" autofocus required>
                                    </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                      <label for="stock"><strong>Stock</strong></label>
                                      <input type="number" value="{{$product->stock}}" name="stock" id="stock" class="form-control" placeholder="Ingrese el stock del Producto" required>
                                    </div>
                            </div>
                            
                            
                            <div class="col-lg-4 grid-margin grid-margin-lg-0">
                              <div class="form-group">
                                      <label for="sell_price"><strong>Precio de venta</strong></label>
                                      <input type="number" value="{{$product->sell_price}}" name="sell_price" id="sell_price" class="form-control" placeholder="Ingrese el valor del Producto" required>
                                    </div>
                            </div>
                            
                                <div class="col-lg-4">
                                  <div class="form-group">
                                          <label for="category_id"><strong>Categoría</strong></label>
                                          <select name="category_id" class="form-control form-control-lg">
                                            <option>--- Seleccione uno ---</option>
                                             @foreach ($categories as $category)
                                              <option value="{{ $category->id }}"
                                                  @if ($category->id == $product->category_id)
                                                    selected
                                                  @endif

                                                >{{ $category->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                </div>
                                <div class="col-lg-4 grid-margin grid-margin-lg-0">
                                  <div class="form-group">
                                          <label for="provider_id"><strong>Proveedor</strong></label>
                                          <select name="provider_id" class="form-control form-control-lg">
                                            <option>--- Seleccione uno ---</option>
                                            @foreach ($providers as $provider)
                                              <option value="{{ $provider->id }}"
                                                @if ($provider->id == $product->provider_id)
                                                    selected
                                                  @endif
                                                >{{ $provider->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                </div>
                                
                               <div class="card-body">
                                  <h4 class="card-title">Imagen del producto Actual</h4>
                                  <div id="lightgallery-without-thumb" class="row lightGallery">
                                    <a href="/image/{{ $product->image }}" class="image-tile"><img src="/image/{{ $product->image }}" alt="image small" width="150" ></a>
                                    
                                  </div>
                                </div>
                                  <div class="card-body">
                                    <h4 class="card-title d-flex">Actualizar Imagen del producto
                                      <small class="ml-auto align-self-end">
                                        <a href="dropify.html" class="font-weight-light" target="_blank">Selecciona una imagen</a>
                                      </small>
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
  <script src="{{asset('assets/vendors/lightgallery/js/lightgallery-all.min.js')}}"></script>
@endsection