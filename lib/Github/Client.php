<?php

namespace Github;

/**
 * Class Client
 * @package Github
 *
 * @author Janos Vajda <vajdajanos@gmail.com>
 */
class Client
{
    protected $type = "";

    public function __construct($type = "Symfony")
    {
        $this->setType($type);
    }

    /**
     * @return HttpMethodsClient
     */
    public function getHttpClient()
    {

        switch ($this->getType()) {
            default:
                return \Symfony\Component\HttpClient\HttpClient::create();
        }

    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}
