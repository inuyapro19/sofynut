<?php

namespace App\Repositories;

use App\Models\Slider;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SliderRepository
 * @package App\Repositories
 * @version January 15, 2018, 3:30 pm -03
 *
 * @method Slider findWithoutFail($id, $columns = ['*'])
 * @method Slider find($id, $columns = ['*'])
 * @method Slider first($columns = ['*'])
*/
class SliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'subtitulo',
        'imagen'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Slider::class;
    }
}
