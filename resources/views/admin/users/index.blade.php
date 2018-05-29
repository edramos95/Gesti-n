@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('notification'))
                        <div class="alert alert-succes">
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
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="text" name="password" class="form-control" value="{{old('password', str_random(8))}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Registrar Usuario</button>
                        </div>
                    </form>

                    <table class="table-bordered" width="815px">
                        <thead>
                            <tr>
                                <th>E-mail</th>
                                <th>Nombre</th>
                                <th>Puesto</th>
                                <th>Opciones</th>
                            </tr>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td><a href="{{url('/show')}}/{{$user->id}}">{{$user->email}}</a></td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        @if($user->role==0)
                                        <label>Administrador</label>
                                        @elseif($user->role==1)
                                        <label>Soporte</label>
                                        @elseif($user->role==2)
                                        <label>Cliente</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('/usuario')}}/{{$user->id}}
                                            " class="btn btn-sm btn-primary" title="Editar">
                                            <span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="{{url('/usuario')}}/{{$user->id}}/eliminar
                                            " class="btn btn-sm btn-danger" title="Dar de baja">
                                            <span class="glyphicon glyphicon-remove"></span></a>
                                        <a href="{{url('/configuracion')}}/{{$user->id}}
                                            " class="btn btn-sm btn-success" title="Registrar equipo">
                                            <span class="glyphicon glyphicon-list-alt"></span>
                                        </a>
                                        <a href="{{url('/equipos')}}/{{$user->id}}" class="btn btn-sm btn-info" title="Consultar equipo registrado">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
@endsection