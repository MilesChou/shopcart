<?php
namespace Shopcart;

use PHPUnit_Framework_TestCase as TestCase;

class UserTest extends TestCase
{
    public function testSayHello()
    {
        // Arrange
        $excepted = 'Hello, Miles';
        $name = 'Miles';

        // Act
        $target = new User($name);
        $actual = $target->sayHello();

        // Assert
        $this->assertEquals($excepted, $actual);
    }
}
