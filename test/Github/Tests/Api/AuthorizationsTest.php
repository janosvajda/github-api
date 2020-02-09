<?php namespace Github\Tests\Api;

use Github\Api\Authorizations;
use Github\Client;


class AuthorizationsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function testAuthorizationsAllShouldBeArray()
    {
        $authorizations = new Authorizations(new Client("Symfony"));
        $result = $authorizations->all();
        $this->assertNotNull($result);
    }


    /**
     * @test
     */
    public function testAuthURLMustBeThis()
    {
        $authorizations = new Authorizations(new Client("Symfony"));
        $result = $authorizations->all();
        $this->assertEquals('https://api.github.com/authorizations', $result['authorizations_url']);
    }

}