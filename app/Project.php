<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

  use softDeletes;

  public static $rules =[
   		'name' => 'required',
   		//'description' => '',
   		'start' => 'date'
   	];
  public static $messages =[
  	'name.required' => 'Es necesario ingresar un nombre para el proyecto.',
  	'start.date' => 'La fecha no tiene el formato correcto.'
  ];

  protected $fillable=[
  	'name', 'description', 'start'
  ];

  //Relationships
  public function users()
  {
      return $this->belongsToMany('App\User');
  }

  public function categories()
  {
    return $this->hasMany('App\Category');
  }

  public function levels()
  {
    return $this->hasMany('App\Level');
  }

  public function getFirstLevelIdAttribute()
  {
    return $this->levels->first()->id;
  }
}