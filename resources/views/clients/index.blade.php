@extends('layouts.template')
@section('title', 'Lista de Clientes')
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
              Lista de Clientes
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              
              <div class="d-flex justify-content-between">
                <div>
                  <h3>Clientes</h3>
                </div>
                <div>
                  <a href="#" class="btn btn-success">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="{{ route('clients.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></a >
                </div>
              </div><br>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>DOCUMENTO</th>
                            <th>TELEFONO</th>
                            <th>EMAIL</th>
                            <th>ESTADO</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($clients as $client)
                        	<tr>
                            <td>{{ $client->id }}</td>
                            <td>
                              <a href="{{ route('clients.show', $client) }}">{{ $client->name }}</a>
                            </td>
                            <td>{{ $client->document }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->status }}</td>
                            <td>
                              {!! Form::open(['route' => ['clients.destroy', $client ], 'method' => 'DELETE']) !!}
                                 <a href="{{ route('clients.edit', $client) }}" title="Editar" class="jsgrid-button jsgrid-edit-button">
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