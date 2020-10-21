<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
	protected $table="notas";
	protected $fillable=[];

	public function asignatura()
	{
		return $this->belongsTo('App\Asignatura');
	    //
	}
    //
}
