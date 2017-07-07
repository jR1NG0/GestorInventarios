<?php

namespace GestorInventarios;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    /**
    *
    *
    * @var string 
    **/
    protected $table = 'productos';

     protected $primaryKey = 'producto_id';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion', 'cantidad','stock_min','area_id',
    ];

    public function areas()
    {
        return $this->hasMany('INV\Area');
    }
}
