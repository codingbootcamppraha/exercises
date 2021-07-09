<?php

namespace Exercises\Testing;

use PHPUnit\Framework\TestCase;
use User;

class UserTest extends TestCase
{
    public function testUserObjectCanBeCreated()
    {
        $user = new User;

        $this->assertInstanceOf('User', $user);
    }

    public function testUserObjectCanBeCreatedWithEmailAddress()
    {
        $user = new User('john.doe@email.com');

        $this->assertInstanceOf('User', $user);
    }

    public function testUserObjectKeepsEmailFromCreation()
    {
        $user = new User('john.doe@email.com');

        $this->assertSame(
            $user->email,
            'john.doe@email.com'
        );
    }

    public function testCreatingUserObjectWithInvalidEmailThrowsException()
    {
        $this->expectException('InvalidArgumentException');

        $user = new User('asdfghjk');
    }

    public function testUserObjectCanBeUsedAsAString()
    {
        $user = new User('john.doe@email.com');

        $user_as_string = (string)$user;

        $this->assertSame(
            'john.doe@email.com',
            $user_as_string
        );
    }
}