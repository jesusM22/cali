<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	protected $table="estudiantes";
	protected $fillable=[];

	public function asignatura()
	{
		return $this->hasMany('App\Asignatura');
	    //
	}
}
