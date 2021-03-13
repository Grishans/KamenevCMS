<?php namespace Kamenev\Feedback\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Kamenev\Feedback\Models\MailInfo;

class MailInfoController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Kamenev.Feedback', 'mail-info-menu-item');
    }

    public function getModel()
    {
        $mailInfo = MailInfo::all()->first();

        if($mailInfo instanceof MailInfo) {
            return $mailInfo;
        }
    }
}
