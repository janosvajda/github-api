<?php

namespace Github\Api;

use Github\Client;

/**
 * Abstract class for Api classes.
 *
 * @author Janos Vajda <vajdajanos@gmail.com>
 *
 * @todo Only GET, POST method has been implemented,
 * because this is just for a test so PUT, DELETE,
 * PATCH, HEAD should be added too.
 */
abstract class AbstractApi implements ApiInterface
{

    /**
     * @var string
     */
    private $url = "https://api.github.com";


    /**
     * The client.
     *
     * @var Client
     */
    protected $client;


    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param null|int $page
     */
    public function setPage($page)
    {
        $this->page = (null === $page ? $page : (int)$page);

        return $this;
    }

    /**
     * @return null|int
     */
    public function getPerPage()
    {
        return $this->perPage;
    }

    /**
     * @param null|int $perPage
     */
    public function setPerPage($perPage)
    {
        $this->perPage = (null === $perPage ? $perPage : (int)$perPage);

        return $this;
    }

    /**
     * Send a GET request with query parameters.
     *
     * @param string $path Request path.
     * @param array $parameters GET parameters.
     * @param array $requestHeaders Request Headers.
     *
     * @return array|string
     */
    protected function get($path, array $parameters = [], array $requestHeaders = [])
    {
        $response = $this->client->getHttpClient()->request('GET', $this->url);
        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        return $response->toArray();
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     */
    protected function post($path, array $parameters = [], array $requestHeaders = [])
    {
        $response = $this->client->getHttpClient()->request('POST', $this->url);
        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        return $response->toArray();
    }


}
