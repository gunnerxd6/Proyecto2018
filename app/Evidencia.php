<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    //Atributes
  	protected $table = 'evidencia';
	protected $primaryKey = 'id';
	protected $fillable = [
		'rut',
		'id_tarea',
		'id_trabajador',
		'mensaje'
	];

	//BelongsTo
	public function tarea(){
    	return $this->belongsTo('App\Tarea','id_tarea');
  	}

	public function trabajador(){
    	return $this->belongsTo('App\Trabajador','id_trabajador');
  	}

  	//HasMany
	public function imagen_evidencia(){
    	return $this->hasMany('App\ImagenEvidencia');
	}



}
