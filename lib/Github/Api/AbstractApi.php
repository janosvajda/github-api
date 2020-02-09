<?php

namespace Github\Api;

use Github\Client;
use Github\Mediator\ResponseMediator;

/**
 * Abstract class for Api classes.
 *
 * @author Janos Vajda <vajdajanos@gmail.com>
 *
 * @todo Only GET method has been implemented, because this is just for a test so PUT, DELETE, PATCH, HEAD should be added too.
 */
abstract class AbstractApi implements ApiInterface
{

    private $url = "https://api.github.com";

    /**
     * @param null|int $page
     */
    public function setPage($page)
    {
        $this->page = (null === $page ? $page : (int) $page);

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
        $this->perPage = (null === $perPage ? $perPage : (int) $perPage);

        return $this;
    }

    /**
     * Send a GET request with query parameters.
     *
     * @param string $path           Request path.
     * @param array  $parameters     GET parameters.
     * @param array  $requestHeaders Request Headers.
     *
     * @return array|string
     */
    protected function get($path, array $parameters = [], array $requestHeaders = [])
    {
        $client = HttpClient::create();
        $response = $client->request('GET', $this->url);
        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();
        echo $content;
    }

    protected function post($path, array $parameters = [], array $requestHeaders = []){
        $client = HttpClient::create();
        $response = $client->request('POST', $this->url);
        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();
        echo $content;
    }



}
