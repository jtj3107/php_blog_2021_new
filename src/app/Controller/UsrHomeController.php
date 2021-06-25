<?php

namespace App\Controller;
  
use App\Controller\Controller;
use App\Service\HomeService;

  
class UsrHomeController extends Controller
{
    private HomeService $homeService;

    public function __construct()
    {
        parent::__construct();
        $this->homeService = HomeService::getInstance();
    }

  public function actionShowAboutMe() {

    require_once $this->getViewPath("usr/home/aboutMe");

  }

}



