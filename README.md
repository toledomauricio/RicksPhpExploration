<img alt="img" src="https://i.pinimg.com/originals/5b/66/7d/5b667d877265b876259a1633403b0ec9.jpg" width="100%" height="auto" />

# RicksPHPExploration
This PHP wrapper for the Rick and Morty API makes it simple to discover all the characters, episodes, and locations from the multiverse. Whether you're a fan of the show or just looking for a fun project to work on, this repository has everything you need to get started. So buckle up and join us on a journey to the farthest reaches of the multiverse! 🪐🔫

## Usage 🚀
Here's how you can use this class to fetch data:

First of all, run composer: `composer install`

Second, you can create a simple file and call the RickAndMorty class:
```php
require_once('RickAndMorty.php');

$rickAndMorty = new RickAndMorty();
$data = $rickAndMorty->fetchData('character', 1, 20);

print_r($data);
```
✨Magic✨

## Usage on Docker 🐳
1. Build the Docker image by running docker `build -t rick-and-morty-api .`
2. Start a new Docker container by running `docker run rick-and-morty-api`
✨Magic✨

## About the RickAndMorty Class
By default, `fetchData()` returns data for characters on page 1 with 20 items per page, but you can modify these values as you like.

## Contribute 🤝
Found a bug or want to suggest a feature? Feel free to open an issue or submit a pull request!

## License 📜
This project is licensed under the MIT License.

**Free Software, Hell Yeah!🤘** 
