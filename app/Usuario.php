<?php

namespace GestorInventarios;

use Illuminate\Database\Eloquent\Model;


class Usuario extends Model {

    
    protected $table = 'usuarios';

    protected $primaryKey = 'usuario_id';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellido','cargo','telefono','area_id',];


    /**
    *@utor jR1NG0
    *
    * funciones ralaciones para libro.
    */

}
