<?php namespace Kamenev\Parservk;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Kamenev\Parservk\Components\ParseVkForm' => 'parsevkform',
        ];
    }

    public function registerSettings()
    {
    }
}
