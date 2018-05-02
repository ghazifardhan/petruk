<?php

namespace Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Model\User;

class HomeController extends Controller {

    public function __construct(){
        parent::__construct();
    }

    public function home(){
        return $this->render('welcome');
    }

}