<?php

namespace GestorInventarios;

use Illuminate\Database\Eloquent\Model;


class Empleado extends Model {

    
    protected $table = 'empleados';

    protected $primaryKey = 'empleado_id';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido','cargo','telefono','departamento_id',];


    /**
    *@utor jR1NG0
    *
    * funciones ralaciones para libro.
    */

}
