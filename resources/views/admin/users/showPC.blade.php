@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('notification'))
                        <div class="alert alert-danger">
                            {{session('notification')}}
                        </div>
                    @endif
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Serie</th>
                                <th>Procesador</th>
                                <th>Memoria RAM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{$usercomputer->user->name}}</td>
                            <td>{{$usercomputer->type}}</td>
                            <td>{{$usercomputer->company}}</td>
                            <td>{{$usercomputer->model}}</td>
                            <td>{{$usercomputer->serial}}</td>
                            <td>{{$usercomputer->processor}}</td>
                            <td>{{$usercomputer->ram}}</td>
                        </tbody>
                        <thead>
                            <tr>
                                <th>S.O.</th>
                                <th>Paquete Ofimatico</th>
                                <th>Navegador</th>
                                <th>Java</th>
                                <th>Adobe Reader</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$usercomputer->so}}</td>
                                <td>{{$usercomputer->ofimatic}}</td>
                                <td>{{$usercomputer->browser}}</td>
                                <td>{{$usercomputer->java}}</td>
                                <td>{{$usercomputer->adobe}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
@endsection