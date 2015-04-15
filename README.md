# Skeleton PHP project

## Usage

Setup

    composer create-project dave1010/php-empty

## Running tests

    ./vendor/bin/phpunit

You can also run `./tdd.sh` to watch PHP files and run PHPUnit automatically whenever there are changes
    
## Running specs

    ./vendor/bin/phpspec run

    ./vendor/bin/behat

Serving web content (from the project root)

    php -S localhost:8000 -t web/

Console app

    ./console.php

## Structure

    src - classes
    tests - test classes
    spec - spec classes
    features - Behat features
    web - web root

