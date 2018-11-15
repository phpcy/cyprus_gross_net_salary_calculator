<?php

declare(strict_types=1);

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class NetSalaryCalculatorControllerTest extends WebTestCase
{
    /**
     * @var Client
     */
    private $client;

    protected function setUp()
    {
        parent::setUp();
        $this->client = self::createClient();
    }

    public function testThatPageIsDisplayed()
    {
        $this->client->request('get', '/');
        $this->assertSame(200, $this->client->getResponse()->getStatusCode());
    }
}