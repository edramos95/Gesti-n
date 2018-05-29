<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComputer extends Model
{
	public static $rules = [
            'id_user' => 'required|string|',
            'type' => 'required|string|max:255|',
            'company' => 'required|string|max:255|',
            'model' => 'required|string|max:255|',
            'serial' => 'required|string|min:6|max:255|',
            'processor' => 'required|string|min:6|max:255|',
            'ram' => 'required|string|min:4|max:255|',
            'so' => 'required|string|min:5|max:255|',
            'ofimatic' => 'required|string|min:11|max:255|',
            'browser' => 'required|string|min:5|max:255|',
            'java' => 'required|string|min:6|max:255|',
            'adobe' => '|required|string|min:2|max:255',
        ];

    public static $messages = [
            'id_user' => 'Es necesario un usuario.',
            'type.required' => 'Este campo es obligatorio.',
            'company.required' => 'Este campo es obligatorio.',
            'model.required' => 'Este campo es obligatorio.',
            'serial.required' => 'Este campo es obligatorio.',
            'processor.required' => 'Este campo es obligatorio.',
            'ram.required' => 'Este campo es obligatorio.',
            'so.required' => 'Este campo es obligatorio.',
            'ofimatic.required' => 'Este campo es obligatorio.',
            'browser.required' => 'Este campo es obligatorio.',
            'java.required' => 'Este campo es obligatorio.',
            'adobe.required' => 'Este campo es obligatorio.',
        ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user');
    }

    public function messages()
    {
    	return $this->hasMany('App\Message');
    }
}