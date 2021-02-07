@extends('layouts.template')
@section('title', 'Ver Proveedor')
@section('styles')
  {{-- expr --}}
@endsection
@section('content')
     <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Proveedor: {{ $provider->name }}
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $provider->name }}</li>
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
                        <p>Descripcion del proveedor </p>
                        <div class="d-flex justify-content-between">
                          <a href="{{ route('providers.edit', $provider) }}" class="btn btn-success">Editar</a>
                          @if ($provider->status == 'ACTIVE')
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
                            @if ($provider->status == 'ACTIVE')
                              ACTIVO
                            @else
                              INACTIVO
                            @endif
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Teléfono
                          </span>
                          <span class="float-right text-muted">
                            {{ $provider->phone }}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Email
                          </span>
                          <span class="float-right text-muted">
                            {{ $provider->email }}
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Dirección
                          </span>
                          <span class="float-right text-muted">
                            {{ $provider->address }}
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
                      <a href="{{ route('providers.index') }}" class="btn btn-primary btn-block">Regresar</a>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>Lista de productos</h3>
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
                            <a class="nav-link" href="{{ route('providers.create') }}">
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