<?php
namespace Kamenev\Parservk\Components;

use CMS\Classes\ComponentBase;
use Kamenev\Parservk\Controllers\VkController;

class ParseVkForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Parse Vk Form',
            'description' => 'Parse user posts from Vk',
        ];
    }

    public function init()
    {
        $vkController = new VkController();
        $posts = $vkController->requestAPI();
        
        // Сделать проверку на существование токена

        $content = $this->renderPartial('posts_vk-partial.htm', ['posts' => $posts]);
        echo $content;
    }
}