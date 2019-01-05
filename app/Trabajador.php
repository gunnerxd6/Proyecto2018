<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    //Atributes
  	protected $table = 'trabajador';
	protected $primaryKey = 'id';
	protected $fillable = [
		'rut',
		'nombre',
		'apellido_materno',
		'apellido_paterno',
		'cargo',
		'activo',
		'contraseña'
	];

	//HasMany
	public function evidencia(){
    	return $this->hasMany('App\Evidencia');
	}


	//HasMany
	public function imagen_evidencia(){
    	return $this->hasMany('App\ImagenEvidencia');
	}

	//HasMany
	public function tarea(){
    	return $this->hasMany('App\Tarea');
	}

}
