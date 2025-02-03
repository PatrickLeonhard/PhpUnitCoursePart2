<?php

namespace App;

class User
{
    public $email;

    protected $mailer_callable;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function setMailerCallable(callable $mailer_callable){
        $this->mailer_callable = $mailer_callable;
    }

    /**
     * @param string $message
     * @retrun boolean
     */
    public function notify(string $message)
    {
        return call_user_func($this->mailer_callable, $this->email, $message);
    }
}