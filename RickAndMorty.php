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

    /**
     * Get data based on the input type from the API, with optional parameters for pagination.
     *
     * @param string $endpoint The main endpoint call
     * @param int $page The page number to retrieve
     * @param int $pageSize The number of items per page
     * @return array An array of data
     */
    public function getData(string $endpoint = 'character', int $page = 1, int $pageSize = 20): array 
    {
        $query = [
            'page' => $page,
            'pageSize' => $pageSize,
        ];
        $response = $this->client->get($endpoint, [
            'query' => $query,
        ]);
        
        $data = json_decode($response->getBody(), true);
        return $data['results'];
    }
}
