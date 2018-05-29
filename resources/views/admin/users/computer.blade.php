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
            <form action="/configuracion/{id}" method="POST">
                <input type="hidden" name="id_user" value="{{$users->id}}">
                    {{ csrf_field() }}
                <h3>HARDWARE</h3>
                <div class="form-group">
                    <label for="type">Tipo de dispositivo:</label>
                    <select name="type" class="form-control">
                        <option value="">Seleccione un tipo de dispositivo</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Escritorio">Escritorio</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="company">Marca:</label>
                    <select name="company" class="form-control">
                        <option value="">Seleccione una Marca</option>
                        <option value="HP">HP</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Dell">Dell</option>
                        <option value="Acer">Acer</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Asus">Asus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="model">Modelo:</label>
                    <input type="text" name="model" class="form-control" value="{{old('model')}}">
                </div>
                <div class="form-group">
                    <label for="serial">Número de serie:</label>
                    <input type="text" name="serial" class="form-control" value="{{old('serial')}}">
                </div>
                <div class="form-group">
                    <label for="processor">Procesador:</label>
                    <input type="text" name="processor" class="form-control" value="{{old('processor')}}">
                </div>
                <div class="form-group">
                    <label for="ram">Memoria RAM:</label>
                    <input type="text" name="ram" class="form-control" value="{{old('ram')}}">
                </div>
                <br>
                <h3>SOFTWARE</h3>
                <div class="form-group">
                    <label for="so">Sistema Operativo:</label>
                    <select name="so" class="form-control">
                        <option value="">Seleccione un Sistema Operativo</option>
                        <option value="Windows XP">Windows XP</option>
                        <option value="Windows Vista">Windows Vista</option>
                        <option value="Windows 7">Windows 7</option>
                        <option value="Windows 8">Windows 8</option>
                        <option value="Windows 10">Windows 10</option>
                    </select>
                </div>
                <div class="form-group">
                        <label for="ofimatic">Paquete de ofimática:</label>
                        <select name="ofimatic" class="form-control">
                        <option value="">Seleccione un paquete ofimático</option>
                        <option value="OFFICE 2007">OFFICE 2007</option>
                        <option value="OFFICE 2010">OFFICE 2010</option>
                        <option value="OFFICE 2013">OFFICE 2013</option>
                        <option value="OFFICE 2016">OFFICE 2016</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="browser">Navegador predeterminado:</label>
                    <select name="browser" class="form-control">
                        <option value="">Seleccione un navegador</option>
                        <option value="Internet Explorer">Internet Explorer</option>
                        <option value="Google Chrome">Google Chrome</option>
                        <option value="Mozilla Firefox">Mozilla Firefox</option>
                        <option value="Opera">Opera</option>
                        <option value="Microsoft Edge">Microsoft Edge</option>
                    </select>
                </div>
                <div class="form-group">
                    <label form="java">Versión de Java</label>
                    <input type="text" name="java" class="form-control" value="{{old('java')}}">
                </div>
                <div class="form-group">
                    <label form="adobe">Versión de Adobe Reader</label>
                    <input type="text" name="adobe" class="form-control" value="{{old('adobe')}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar datos</button>
                </div>
            </form>
        </div>
    </div>
@endsection