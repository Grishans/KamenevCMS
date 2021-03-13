<?php
namespace Kamenev\Parseinstagram\Components;

use CMS\Classes\ComponentBase;
use Kamenev\Parseinstagram\Controllers\ParseInstagramController;

class ParseInstForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Parse Instagram Form',
            'description' => 'Parse user posts from Instagram',
        ];
    }

    public function init()
    {
        $instController = new ParseInstagramController();
        $posts = $instController->apiRequest();
        $content = $this->renderPartial('posts_inst-partial.htm', ['posts' => $posts]);
        echo $content;
    }
}