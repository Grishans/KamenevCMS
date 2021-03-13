<?php namespace Kamenev\Parseinstagram;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
	return [
		'Kamenev\Parseinstagram\Components\ParseInstForm' => 'parseinstform',
	];
    }

    public function registerSettings()
    {
    }
}
