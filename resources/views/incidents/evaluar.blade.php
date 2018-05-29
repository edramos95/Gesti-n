@extends('layouts.app')

@section('content')
	<div class="panel panel-primary">
        <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
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
                    <input type="hidden" name="support_id" value="{{$incidents->support_id}}">
                    <input type="hidden" name="client_id" value="{{$incidents->client_id}}">
                    <div class="form-group">
                    	<label for="satisfaccion">1. ¿Qué tan buena fue la atención proporcionada por soporte técnico?</label>
                    	<select name="satisfaccion" class="form-control">
                        	<option value="">Seleccione una opción</option>
                        	<option value="5">Excelente</option>
                        	<option value="4">Muy buena</option>
                        	<option value="3">Regular</option>
                        	<option value="2">Deficiente</option>
                        	<option value="1">Pésima</option>
                    	</select>
                    </div>
                    <div class="form-group">
                    	<label for="tiempo">2. ¿Qué tanto tiempo pasó para que se solucionara su problema?</label>
                    	<select name="tiempo" class="form-control">
                        	<option value="">Seleccione una opción</option>
                        	<option value="5">1 Hora máximo</option>
                        	<option value="4">De 1 a 3 días</option>
                        	<option value="3">1 Semana</option>
                        	<option value="2">1 Mes</option>
                        	<option value="1">Más del mes</option>
                        </select>
                    </div>
                    <div class="form-group">
                    	<label for="desarrollo">3. ¿Considera que la atención brindada ha hecho que usted pueda desarrollar mejor su trabajo?</label>
                    	<select name="desarrollo" class="form-control">
                        	<option value="">Seleccione una opción</option>
                        	<option value="5">Totalmente</option>
                        	<option value="4">Mucho</option>
                        	<option value="3">No veo ni siento ningún cambio</option>
                        	<option value="2">Poco</option>
                        	<option value="1">Nada</option>
                        </select>
                    </div>
                    <div class="form-group">
                    	<label for="recomendacion">4. ¿Recomendaría a otros usuarios solicitar ayuda de la persona que lo(a) atendió?</label>
                    	<select name="recomendacion" class="form-control">
                        	<option value="">Seleccione una opción</option>
                        	<option value="5">Totalmente</option>
                        	<option value="4">Mucho</option>
                        	<option value="3">Tal vez</option>
                        	<option value="2">No</option>
                        	<option value="1">Para nada</option>
                        </select>
                    </div>
                    <div class="form-group">
                    	<label for="trato">5. ¿Considera que la persona que lo(a) atendió debe mejorar su trato hacía los demás?</label>
                    	<select name="trato" class="form-control">
                        	<option value="">Seleccione una opción</option>
                        	<option value="5">Para nada</option>
                        	<option value="4">No</option>
                        	<option value="3">Tal vez</option>
                        	<option value="2">Mucho</option>
                        	<option value="1">Totalmente</option>
                        </select>
                    </div>
                    <div class="form-group">
                    	<label for="comentario">Si así lo desea, puede escribir su opinión sobre la manera en que lo(a) atendieron:</label>
                    	<input type="text" name="comentario" class="form-control">
                    </div>
                    <div class="form-group">
                    	<button class="btn btn-primary" type="submit">Guardar Evaluación</button>
                	</div>
                </form>
        </div>
    </div>
@endsection