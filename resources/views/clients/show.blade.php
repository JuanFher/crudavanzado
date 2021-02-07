@extends('layouts.template')
@section('title', 'Ver Clientes')
@section('styles')
  {{-- expr --}}
@endsection
@section('content')
     <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Clientes: {{ $client->name }}
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $client->name }}</li>
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
                        <img src="{{asset('assets/images/faces/face12.jpg')}}" alt="profile" class="img-lg rounded-circle mb-3"/>
                        <p>Documento N°: <strong>{{ $client->document }}</strong> </p>
                        <div class="d-flex justify-content-between">
                          <a href="{{ route('clients.edit', $client) }}" class="btn btn-success">Editar</a>
                          @if ($client->status == 'ACTIVE')
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
                            @if ($client->status == 'ACTIVE')
                              ACTIVO
                            @else
                              DESACTIVO
                            @endif
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Teléfono
                          </span>
                          <span class="float-right text-muted">
                            {{ $client->phone }}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Email
                          </span>
                          <span class="float-right text-muted">
                            {{ $client->email }}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Dirección
                          </span>
                          <span class="float-right text-muted">
                            {{ $client->address }}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Facebook
                          </span>
                          <span class="float-right text-muted">
                            <a href="#">David Grey</a>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Twitter
                          </span>
                          <span class="float-right text-muted">
                            <a href="#">@davidgrey</a>
                          </span>
                        </p>
                      </div>
                      <a href="{{ route('clients.index') }}" class="btn btn-primary btn-block">Regresar</a>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>Lista de Facturas del cliente</h3>
                          {{-- <div class="d-flex align-items-center">
                            <h5 class="mb-0 mr-2 text-muted">Canada</h5>
                            <select id="profile-rating" name="rating" autocomplete="off">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div> --}}
                        </div>
                        
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav profile-navbar">
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('clients.create') }}">
                              <i class="fa fa-shopping-bag"></i>
                              Facturar
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