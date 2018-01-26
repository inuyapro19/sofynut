<?php

namespace App\Repositories;

use App\Models\Informacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InformacionRepository
 * @package App\Repositories
 * @version January 17, 2018, 2:30 pm -03
 *
 * @method Informacion findWithoutFail($id, $columns = ['*'])
 * @method Informacion find($id, $columns = ['*'])
 * @method Informacion first($columns = ['*'])
*/
class InformacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Informacion::class;
    }
}
