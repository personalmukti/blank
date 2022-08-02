<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Websetting
 * @package App\Models
 * @version August 2, 2022, 2:48 am UTC
 *
 * @property string $website_name
 * @property string $website_logo
 * @property string $website_version
 */
class Websetting extends Model
{


    public $table = 'websetting';
    



    public $fillable = [
        'website_name',
        'website_logo',
        'website_version'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'website_name' => 'string',
        'website_logo' => 'string',
        'website_version' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
