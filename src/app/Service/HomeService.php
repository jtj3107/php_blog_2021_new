<?php

namespace App\Service;

use App\Repository\HomeRepository;
use App\Vo\ResultData;

class HomeService
{
    private HomeRepository $homeRepository;

    public static function getInstance(): HomeService
    {
        static $instance;

        if ($instance === null) {
            $instance = new HomeService();
        }

        return $instance;
    }

    private function __construct()
    {
        $this->homeRepository = HomeRepository::getInstance();
    }
  }