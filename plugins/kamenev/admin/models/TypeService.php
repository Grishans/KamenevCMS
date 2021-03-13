<?php namespace Kamenev\Admin\Models;

use Model;

/**
 * Model
 */
class TypeService extends Model
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
    public $table = 'kamenev_admin_type_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
