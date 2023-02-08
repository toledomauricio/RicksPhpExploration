<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

class RickAndMorty
{
    private $baseUrl = 'https://rickandmortyapi.com/api/';
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'timeout' => 2.0,
        ]);
    }
}
