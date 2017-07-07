<?php

namespace GestorInventarios;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    
    /**
    *
    *
    * @var string 
    **/
    protected $table = 'departamentos';

    protected $primaryKey = 'departamento_id';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 
    ];

    

}