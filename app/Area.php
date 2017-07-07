<?php

namespace GestorInventarios;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    
    /**
    *
    *
    * @var string 
    **/
    protected $table = 'productos';

    protected $primaryKey = 'area_id';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 
    ];

    //____________________________________

    public function producto()
    {
    	return $this->hasMany('INV\Producto');
    }

    public function usuario()
    {
    	return $this->belongsTo('INV\Usuario');
    }

}