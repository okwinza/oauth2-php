<?php

declare(strict_types=1);

namespace OAuth2\Event;

use OAuth2\Model\IOAuth2Client;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use OAuth2\Model\OAuth2Client;

/**
 * Pre grant acess token event data
 *
 * @author Charles J. C Elling <tlakomistli.anakmosatlani@gmail.com>
 *
 */
class PreGrantAccessTokenEvent extends Event
{
    /**
     * HTTP request data
     * @var Request
     */
    protected $request;

    /**
     * OAuth 2 request filtered data
     * @var array
     */
    protected $input;

    /**
     * Application data associated with the access token, such as a User object
     * @var array
     */
    protected $data;

    /**
     * Client requesting the access token
     *
     * @var OAuth2Client
     */
    protected $client;

    /**
     *
     * @param Request $request
     * @param array $data
     * @param array $input
     * @param IOAuth2Client $client
     */
    public function __construct(Request $request, $data, $input, IOAuth2Client $client)
    {
        $this->request = $request;
        $this->input = $input;
        $this->data  = $data;
        $this->client = $client;
    }

    /**
     * Get the HTTP request data
     *
     * @return \Symfony\Component\HttpFoundation\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Get the request filtered data
     * @return array
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Get the request unfiltered data
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Get the client requesting the access token
     *
     * @return \OAuth2\Model\OAuth2Client
     */
    public function getClient()
    {
        return $this->client;
    }
}