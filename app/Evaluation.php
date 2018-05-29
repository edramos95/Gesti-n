<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    public static $rules = [
            'support_id' => 'required',
            'tiempo' => 'required',
            'satisfaccion' => 'required',
            'desarrollo' => 'required',
            'recomendacion' => 'required',
            'trato' => 'required',
            'client_id' => 'required'
    ];

    public static $messages = [
            'support_id.required' => 'No hay un usuario de soporte especificado.',
            'tiempo.required' => 'No ha evaluado la pregunta #2.',
            'satisfaccion.required' => 'No ha evaluado la pregunta #1.',
            'desarrollo.required' => 'No ha evaluado la pregunta #3.',
            'recomendacion.required' => 'No ha evaluado la pregunta #4.',
            'trato.required' => 'No ha evaluado la pregunta #5.',
            'client_id.required' => 'No se ha detectado un usuario cliente.'
    ];

    public function support()
    {
    	return $this->belongsTo(Incident::class);
    }
}