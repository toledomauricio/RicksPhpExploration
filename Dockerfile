# Use an existing PHP image as a base
FROM php:7.4-cli

# Copy files into the image
COPY . .

# Install updates, git, curl and composer
RUN apt-get update && apt-get -y --no-install-recommends install git curl \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && rm -rf /var/lib/apt/lists/*

# Install composer dependencies
RUN composer install

# Run the PHP script
CMD [ "php", "./example.php" ]