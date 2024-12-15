<?php

namespace App\Models\Support;

use Illuminate\Notifications\Notifiable;

class GenericNotifiable
{
    use Notifiable;

    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Define o canal para o qual a notificação será enviada (neste caso, o e-mail).
     */
    public function routeNotificationForMail()
    {
        return $this->email;
    }
}
