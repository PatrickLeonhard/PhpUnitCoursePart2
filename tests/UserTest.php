<?php

use App\Mailer;
use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new User('foo@bar.com');

        $mailer = $this->createMock(Mailer::class);

        $mailer->expects($this->once())->method('send')->willReturn(true);

        $user->setMailer($mailer);

        $this->assertTrue($user->notify('Hello Foo!'));
    }
}