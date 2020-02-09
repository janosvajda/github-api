<?php

namespace Github;

use Symfony\Component\HttpClient\HttpClient;


class Client
{

    public function __construct(){}

    /**
     * @return HttpMethodsClient
     */
    public function getHttpClient()
    {
        return HttpClient::create();
    }

}
