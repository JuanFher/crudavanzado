@extends('layouts.template')
@section('title', 'Editar cliente')
@section('content')
  <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Crear cliente
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cliente: {{$client->name}}</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              {{-- <h4 class="card-title">clientes</h4> --}}

              <div class="row">
                  <div class="col-12">
                    
                    {!! Form::model($client, ['route' => ['clients.update', $client], 'method' => 'PUT']) !!}
                       <div class="form-control">
                          <div class="row">
                            
                            <div class="col-lg-6 grid-margin grid-margin-lg-0">
                              <div class="form-group">
                                      <label for="name"><strong>Nombre</strong></label>
                                      <input type="text" value="{{$client->name}}" name="name" id="name" class="form-control" placeholder="Ingrese el nombre de la cliente" autofocus required>
                                    </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="form-group">
                                      <label for="document"><strong>Documento</strong></label>
                                      <input type="text" value="{{$client->document}}" name="document" id="document" class="form-control" placeholder="Ingrese el documento del cliente" required>
                                    </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="form-group">
                                      <label for="phone"><strong>Teléfono</strong></label>
                                      <input type="text" value="{{$client->phone}}" name="phone" id="phone" class="form-control" placeholder="Ingrese el teléfono del cliente" required>
                                    </div>
                            </div>
                            <div class="col-lg-6 grid-margin grid-margin-lg-0">
                              <div class="form-group">
                                      <label for="address"><strong>Dirección</strong></label>
                                      <input type="text" value="{{$client->address}}" name="address" id="address" class="form-control" placeholder="Ingrese la dirección del cliente" required>
                                    </div>
                            </div>
                            <div class="col-lg-6 grid-margin grid-margin-lg-0">
                              <div class="form-group">
                                      <label for="email"><strong>Email</strong></label>
                                      <input type="email" value="{{$client->email}}" name="email" id="email" class="form-control" placeholder="Ingrese el email del cliente" required>
                                    </div>
                            </div>
                          </div>
                        </div>
                        
                       <div class="form-group mt-2 mr-2">
                    <a href="{{ route('clients.index') }}" class="btn btn-light">Regresar</a>
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

@endsection