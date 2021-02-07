@extends('layouts.template')
@section('title', 'Lista de Proveedores')
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
              Lista de Proveedores
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Proveedores</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              
              <div class="d-flex justify-content-between">
                <div>
                  <h3>Proveedores</h3>
                </div>
                <div>
                  <a href="#" class="btn btn-success">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="{{ route('providers.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></a >
                </div>
              </div><br>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>ID</th>
                            {{-- <th>LOGO</th> --}}
                            <th>NOMBRE</th>
                            <th>RUC</th>
                            <th>EMAIL</th>
                            <th>TELEFONO</th>
                            <th>ESTADO</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($providers as $provider)
                        	<tr>
                            {{-- <td> --}}
                               {{--  @if ( $r->logo )
                                  <img src="images/users/{{ $r->logo }}" alt="" class="rounded" height="40">
                                @else
                                  <img src="images/users/user.png" alt="" class="rounded" height="40">
                                @endif --}}
                            {{-- </td> --}}
                            <td scope="row">{{ $provider->id }}</td>
                            <td>
                              <a href="{{ route('providers.show', $provider) }}">{{ $provider->name }}</a>
                              
                            </td>
                            <td>{{ $provider->ruc_number }}</td>
                            <td>{{ $provider->email }}</td>
                            <td>{{ $provider->phone }}</td>
                            <td>{{ $provider->status }}</td>
                            <td>
                              {!! Form::open(['route' => ['providers.destroy', $provider ], 'method' => 'DELETE']) !!}
                                 <a href="{{ route('providers.edit', $provider) }}" title="Editar" class="jsgrid-button jsgrid-edit-button">
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
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('scripts')
	<script src="{{asset ('assets/js/data-table.js')}}"></script>
@endsection