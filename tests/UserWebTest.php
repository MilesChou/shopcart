<?php
namespace Shopcart;

use PHPUnit_Framework_TestCase as TestCase;
use Framins\Slim\Test\SlimCaseTrait;

class UserWebTest extends TestCase
{
    use SlimCaseTrait;

    public function setUp() {
        parent::setUp();

        $app = require __DIR__ . '/../app.php';
        $this->setApp($app);
    }

    public function testSayHello()
    {
        // Arrange
        $url = '/hello/Miles';
        $excepted = 'Hello, Miles';

        // Act
        $this->sendGET($url);

        // Assert
        $this->seeResponseContains($excepted);
    }
}
