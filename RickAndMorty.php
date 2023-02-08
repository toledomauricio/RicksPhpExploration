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
     * Get a list of characters from the API, with optional parameters for pagination.
     *
     * @param int $page The page number to retrieve
     * @param int $pageSize The number of items per page
     * @return array An array of characters
     */
    public function getCharacters(int $page = 1, int $pageSize = 20): array
    {
        $query = [
            'page' => $page,
            'pageSize' => $pageSize,
        ];
        $response = $this->client->get('character', [
            'query' => $query,
        ]);
        $characters = json_decode($response->getBody(), true);
        return $characters['results'];
    }
}
