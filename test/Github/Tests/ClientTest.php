<?php namespace Github\Tests;

use Github\Client;


class ClientTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function testClientShouldNotBeNull()
    {
        $client = new Client();
        $this->assertNotNull($client);
    }

}