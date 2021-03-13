<?php namespace Kamenev\Feedback;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{    
    public function registerComponents()
    {
        return [
            'Kamenev\Feedback\Components\FeedbackForm' => 'feedbackform',
        ];
    }

    public function registerSettings()
    {
    }
}
