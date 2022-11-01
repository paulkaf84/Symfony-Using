<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Events\GreatUser;
use Symfony\Component\HttpFoundation\Response;

class ExceptionSubscriber implements EventSubscriberInterface
{

    /**
     * @inheritDoc
     */
    public static function getSubscribedEvents(): array
    {
        // TODO: Implement getSubscribedEvents() method.
        return [
            GreatUser::NAME, 'greatUser'
        ];
    }

    public  function greatUser(): Response
    {
        return new Response('Hey guy', RESPONSE::HTTP_OK);
    }
}