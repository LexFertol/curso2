<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //

    
    protected $fillable=['matricula','paterno','materno','nombre','fecha_nacimiento','sexo','id_departamento','id_turno'];
    public function departamento()
    {
    	return $this ->belongsTo ('App\Departamento');
    }
     public function turno()
    {
    	return $this ->belongsTo ('App\Turno');
    }

    /*public function setDescripcionAttribute($value)
    {
    	$this->attributes['descripcion'] =mb_strtroupper($value,'utf-8');
    }*/
}
