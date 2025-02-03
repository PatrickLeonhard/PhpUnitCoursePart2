<?php

namespace App;

class User
{
    public $email;

    protected $mailer;

    public function __construct(string $email)
    {
        $this->email = $email;
    }
    public function setMailer(Mailer $mailer){
        $this->mailer = $mailer;
    }

    /**
     * @param string $message
     * @return boolean
     */
    public function notify(string $message)
    {
        $mailer = new Mailer();

        return $this->mailer->send($this->email, $message);
    }
}