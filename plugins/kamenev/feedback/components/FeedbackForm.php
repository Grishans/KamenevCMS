<?php namespace Kamenev\Feedback\Components;

use CMS\Classes\ComponentBase;
use Kamenev\Feedback\Controllers\MailInfoController;
use Log;
use Input;
use Mail;

class FeedbackForm extends ComponentBase 
{
    public function componentDetails()
    {
        return [
            'name' => 'Feedback Form',
            'description' => 'Feedback Form use mail',
        ];
    }

    public function onSend()
    {
        $vars = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'type_event' => Input::get('type_event'),
            'content' => Input::get('content'),
        ];

        $pat = 'kamenev.feedback::mail.message';

        $mailInfoController = new MailInfoController();
        $mailInfo = $mailInfoController->getModel();
        if ($mailInfo == null) {
            Log::error('Обратная связь: ошибка получения данных с базы!');
            return 0;
        }

        Mail::send($pat, $vars, function($message) use ($mailInfo) {
            $message->from($mailInfo->from_address, $mailInfo->from_name);
            $message->to($mailInfo->to_address, $mailInfo->to_name);
            $message->subject($mailInfo->subject);
        });
    }


}