<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Informacion
 * @package App\Models
 * @version January 17, 2018, 2:30 pm -03
 *
 * @property string nombre
 * @property string email
 * @property string telefono
 * @property string telefono2
 * @property string quienes_somos
 * @property string direcion
 * @property string facebook
 * @property string twitter
 * @property string instagram
 * @property string mapa
 */
class Informacion extends Model
{
    use SoftDeletes;

    public $table = 'informacions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'email',
        'telefono',
        'telefono2',
        'quienes_somos',
        'direcion',
        'facebook',
        'twitter',
        'instagram',
        'mapa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'email' => 'string',
        'telefono' => 'string',
        'telefono2' => 'string',
        'quienes_somos' => 'string',
        'direcion' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'instagram' => 'string',
        'mapa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'telefono2' => 'quienes_somos text textarea'
    ];

    
}
