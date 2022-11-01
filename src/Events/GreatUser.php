<?php

namespace App\Events;

use Symfony\Contracts\EventDispatcher\Event;

final class GreatUser extends Event
{
    const NAME = 'great.user';
    private string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}