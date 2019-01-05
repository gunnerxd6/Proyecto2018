<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    //Atributes
  	protected $table = 'tarea';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id_trabajador',
		'activa',
		'descripcion',
		'estado'
	];



//BelongsTo
	public function trabajador(){
    	return $this->belongsTo('App\Trabajador','id_trabajador');
  	}

//HasMany
	public function evidencia(){
    	return $this->hasMany('App\Evidencia');
	}

}
