<?php

namespace App\Repository;

class HomeRepository
{
    public static function getInstance(): HomeRepository
    {
        static $instance;

        if ($instance === null) {
            $instance = new HomeRepository();
        }

        return $instance;
    }

    private function __construct()
    {
    }
}