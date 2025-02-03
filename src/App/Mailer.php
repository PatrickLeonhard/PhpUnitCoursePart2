<?php

namespace App;

use PHPUnit\Event\InvalidArgumentException;

class Mailer
{
    /**
     * @param string $email
     * @param string $message
     *
     * @throws InvalidArgumentException
     *
     * @return boolean
     */
    public function send(string $email, string $message)
    {
        if(empty($email)) {
            throw new InvalidArgumentException;
        }
        echo "Send '$message' to '$email'";

        return true;
    }
}