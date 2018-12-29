<?php

function get_db_config()
{
    if (getenv('IS_IN_HEROKU')) {
        //$url = parse_url(getenv("DATABASE_URL"));

        return $db_config = [
            'connection' => 'pgsql',
            'host' => 'ec2-107-20-237-78.compute-1.amazonaws.com',
            'database'  => 'd95lbl7qjnjjs3',
            'username'  => 'hilnqxfzfnfuvj',
            'password'  => '71815ade882ee92601547d1933c6a1260bb50df517d70dd7f7d6bbc8ce2ba4c9',
        ];
    } else {
        return $db_config = [
            'connection' => env('DB_CONNECTION', 'mysql'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'database'  => env('DB_DATABASE', 'laravel-shop'),
            'username'  => env('DB_USERNAME', 'homestead '),
            'password'  => env('DB_PASSWORD', 'secret'),
        ];
    }
}