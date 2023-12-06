<?php

namespace App\MessageBusHandler\Mail;

use App\MessageBus\Mail\MailMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class MailMessageHandler implements MessageHandlerInterface
{
    public function __invoke(MailMessage $mailMessage)
    {
        echo $mailMessage->getType();
       sleep(5);

    }
}
