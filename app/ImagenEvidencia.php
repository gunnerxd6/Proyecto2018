<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenEvidencia extends Model
{
    //Atributes
  	protected $table = 'imagen_evidencia';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id_evidencia',
		'url_imagen',
		'id_trabajador'
	];

//BelongsTo
	public function evidencia(){
    	return $this->belongsTo('App\Evidencia','id_evidencia');
  	}

	public function trabajador(){
    	return $this->belongsTo('App\Trabajador','id_trabajador');
  	}

}
