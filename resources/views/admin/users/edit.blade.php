@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Editar Usuarios</div>
                <div class="panel-body">
                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{session('notification')}}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">
                            E-mail:</label>
                            <input type="email" readonly name="email" class="form-control" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="text" name="password" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="role">Tipo de usuario:</label>
                            <select name="role" class="form-control">
                                <option value="">Seleccione tipo de usuario</option>
                                    <option value="0">Administrador</option>
                                    <option value="1">Soporte</option>
                                    <option value="2">Cliente</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Editar Usuario</button>
                        </div>
                    </form>

                    <form action="/proyecto-usuario" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="row">
                            <div class="col-md-4">
                                <select name="project_id" class="form-control" id="select-project">
                                    <option value="">Seleccione proyecto</option>
                                    @foreach($projects as $project)
                                        <option value="{{$project->id}}">{{$project->name}}</option>
                                    @endforeach()
                                </select>
                            </div>
                            <div class="col-md-4">
                              <select name="level_id" class="form-control" id="select-level">
                                    <option value="">Seleccione nivel</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block">Asignar proyecto</button>
                            </div>
                      </div>
                    </form>

                    <p>Proyectos asignados</p>

                    <table class="table-bordered" width="800px">
                        <thead>
                            <tr>
                                <th>Proyecto</th>
                                <th>Nivel</th>
                                <th>Opciones</th>
                            </tr>
                            <tbody>
                                @foreach($projects_user as $project_user)
                                <tr>
                                    <td>{{$project_user->project->name}}</td>
                                    <td>{{$project_user->level->name}}</td>
                                    <td>
                                        <a href="/proyecto-usuario/{{$project_user->id}}/eliminar" class="btn btn-sm btn-danger" title="Eliminar">
                                            <span class="glyphicon glyphicon-remove"></span></a>
                                    </td>
                                </tr>
                            @endforeach 
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
@endsection

@section('scripts')
    <script src="/js/admin/usuarios/edit.js"></script>
@endsection