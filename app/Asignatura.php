<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    //
    protected $table="asignaturas";
	protected $fillable=[];

	public function estudiante()
	{
		return $this->belongsTo('App\Estudiante');
	    //
	}
	public function nota(){
		return $this->hasOne('App\Nota');
	}
}
