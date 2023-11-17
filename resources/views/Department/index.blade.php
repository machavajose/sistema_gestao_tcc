

@extends('adminlte::page')


@section('title', 'Dashboard')
@section('content')



<div class="col-sm-6">
    <h3>Departamentos</h3>
  </div>
  

<div class="card">
    <div class="card-header">
      
      <div class="app-title">
        <div><button class="btn btn-outline-info"  data-toggle="modal" data-target="#mutemba"><a href=""></a>Adicionar Tema</button></div>
          </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Departamento</th>
          <th>Ação</th>

          @if($department->count() > 0)
                          @foreach($department as $rs)

                          <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->name }}</td>
                           
                            <td>
                              <center>
                             <button class="btn btn-info" data-toggle="modal" data-target="#salvador"><a href=""></a>Editar</button>-
                              <button class="btn btn-warning" ><a href="{{route('department.destroy', $rs->id)}}">Apagar</a></button>
                            </center>
                            </td>
                          </tr>
                          @endforeach
                          @endif
          
        </tr>
        </thead>
        <tbody>

            {{-- Modal para adicionar temas --}}
<div class="modal fade" id="mutemba">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Conteúdo do modal aqui -->
            <div class="modal-header">
                <h4 class="modal-title">Departamentos</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="post" action="{{route('department.store')}}">
                          @csrf
                      <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" name="name" placeholder="Departamento">
                      </div>
                      
                      
                      
                      
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary me-2">Guardar</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  </div>
  

            @stop

            