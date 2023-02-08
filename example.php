<?php

// Require the RickAndMorty class
require_once('RickAndMorty.php');

// Initialize an instance of the RickAndMorty class
$api = new RickAndMorty();

// Get a list of data, with optional parameters for pagination
$characters = $api->getData('character', 1, 10);
$episodes = $api->getData('episode', 1, 5);
$locations = $api->getData('location', 1, 5);

// Display the first character in the list
echo "First character: \n";
echo "Name: {$characters[0]['name']} \n";
echo "Status: {$characters[0]['status']} \n";
echo "Species: {$characters[0]['species']} \n\n";

// Display the first episode in the list
echo "First episode: \n";
echo "Name: {$episodes[0]['name']} \n";
echo "Episode code: {$episodes[0]['episode']} \n";
echo "Air date: {$episodes[0]['air_date']} \n\n";

// Display the first location in the list
echo "First location: \n";
echo "Name: {$locations[0]['name']} \n";
echo "Type: {$locations[0]['type']} \n";
echo "Dimension: {$locations[0]['dimension']} \n";

// 🎉 All done! You've successfully retrieved and displayed data from the Rick and Morty API! 🎉