<?php namespace Kamenev\Parseinstagram\Models;

use Model;

/**
 * Model
 */
class ParseInstagram extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kamenev_parseinstagram_info';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
