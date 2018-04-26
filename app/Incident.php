<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    public static $rules = [
            'category_id' => 'sometimes|nullable|exists:categories,id',
            'severity' => 'required|in:Menor,Normal,Mayor',
            'title' => 'required|min:5',
            'description' => 'required|min:15'
    ];

    public static $messages = [
            'category_id.exists' => 'La categoría seleccionada no existe',
            'title.required' => 'No ha ingresado un título para la incidencia.',
            'title.min' => 'El título debe ser de mínimamente 5 caracteres.',
            'description.required' => 'No ha ingresado la descripción de la incidencia.',
            'description.min' => 'El título debe ser de mínimamente 15 caracteres.'
    ];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function project()
    {
    	return $this->belongsTo('App\Project');
    }

    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function getCategoryNameAttribute()
    {
    	if($this->category)
    		return $this->category->name;

    	return 'General';
    }

    public function getSupportNameAttribute()
    {
    	if($this->support)
    		return $this->support->name;

    	return 'Sin asignar';
    }

    public function support()
    {
    	return $this->belongsTo('App\User', 'support_id');
    }

    public function client()
    {
    	return $this->belongsTo('App\User', 'client_id');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function getStateAttribute()
    {
        if($this->active == 0)
            return 'Resuelto';

        if($this->support_id)
            return 'Asignado';

        return 'Pendiente';
    }
}