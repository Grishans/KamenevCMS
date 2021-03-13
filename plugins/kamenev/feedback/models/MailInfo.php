<?php namespace Kamenev\Feedback\Models;

use Model;
use Log;

/**
 * Model
 */
class MailInfo extends Model
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
    public $table = 'kamenev_feedback_mail_info';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function beforeSave()
    {
        Log::error("Opa");
        config(['mail.APP_TEST' => 'kojieksdsdsdsdsdsdsdsd']);
    }
}
