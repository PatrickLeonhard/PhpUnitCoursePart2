<?php

use App\Mailer;
use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new User('foo@bar.com');

        $user->setMailerCallable(function() {
            echo "mocked";
            return true;
        });

        $this->assertTrue($user->notify('Hello Foo!'));
    }
}