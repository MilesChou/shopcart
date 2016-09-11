<?php
namespace Shopcart;

use PHPUnit_Framework_TestCase as TestCase;
use Framins\Slim\Test\SlimCaseTrait;
use Illuminate\Database\Capsule\Manager as Capsule;

class UserWebTest extends TestCase
{
    use SlimCaseTrait;

    public function setUp() {
        parent::setUp();

        $app = require __DIR__ . '/../app.php';
        $this->setApp($app);

        $sql = \file_get_contents(__DIR__ . '/../sql/localhost.sql');

        Capsule::connection()->getPdo()->exec($sql);
    }

    public function tearDown() {
        // Clear DB
        Capsule::schema()->drop('order');
        Capsule::schema()->drop('product');
        Capsule::schema()->drop('product_category');
    }

    public function testIndexPhp()
    {
        // Arrange
        $url = '/index.php';
        $exceptedAdminLink = '管理員頁面';
        $exceptedContactLink = '聯絡我們';

        // Act
        $this->sendGET($url);

        // Assert
        $this->seeResponseContains($exceptedAdminLink);
        $this->seeResponseContains($exceptedContactLink);
    }

    public function testAdminPhp()
    {
        // Arrange
        $url = '/admin.php';
        $exceptedAdminLink = '商品管理';
        $exceptedContactLink = '訂單管理';

        // Act
        $this->sendGET($url);

        // Assert
        $this->seeResponseContains($exceptedAdminLink);
        $this->seeResponseContains($exceptedContactLink);
    }
}
