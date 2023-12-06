<?php

namespace App\Controller;

use App\MessageBus\Mail\MailMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\DelayStamp;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'index_list')]
    public function index(MessageBusInterface $bus)
    {
        $bus->dispatch(new MailMessage(rand(1, 100), 'login', 'tr', 'furkan.aydin@gmail.com'), [new DelayStamp('60000')]);

        return new Response('Message Sent');
    }
}