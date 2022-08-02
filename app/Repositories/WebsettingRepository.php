<?php

namespace App\Repositories;

use App\Models\Websetting;
use App\Repositories\BaseRepository;

/**
 * Class WebsettingRepository
 * @package App\Repositories
 * @version August 2, 2022, 2:48 am UTC
*/

class WebsettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'website_name',
        'website_logo',
        'website_version'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Websetting::class;
    }
}
