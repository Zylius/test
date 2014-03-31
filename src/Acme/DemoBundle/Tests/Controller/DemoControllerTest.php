<?php

namespace Acme\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DemoControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $this->assertEquals(1,1);
    }

    public function testSecureSection()
    {
        $this->assertEquals(1,1);
    }
}
