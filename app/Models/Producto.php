<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version January 15, 2018, 3:26 pm -03
 *
 * @property string nombre
 * @property string descripcion
 */
class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion',
        'imagen'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'descripcion' => 'string',
        'imagen'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required'
    ];

    public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre']=$nombre;
        $this->attributes['slug']=str_slug($nombre,'_');
    }

    public function scoopesProductosLimit()
    {
       return $this->orderBy('id','desc')->limit(3);
    }
    
}
