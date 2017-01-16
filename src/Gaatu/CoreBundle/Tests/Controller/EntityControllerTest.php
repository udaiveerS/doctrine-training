<?php

namespace Gaatu\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EntityControllerTest extends WebTestCase
{
    public function testInsert()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/insert');
    }

}
