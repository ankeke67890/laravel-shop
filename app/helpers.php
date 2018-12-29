<?php

function get_db_config()
{
    if (getenv('IS_IN_HEROKU')) {
        //$url = parse_url(getenv("DATABASE_URL"));

        return $db_config = [
            'connection' => 'pgsql',
            'host' => 'ec2-54-235-169-191.compute-1.amazonaws.com',
            'port' => '5432',
            'database'  => 'd7c76j5e3m94br',
            'username'  => 'zrsuimzepzhzut',
            'password'  => '83fdb317d24dfb2c5e8662d647ee80e45886fdef24a31ae27d3ead72bd7d2cfc',
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