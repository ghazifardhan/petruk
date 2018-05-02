<?php

namespace Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;
use Petruk\Framework\Template;

class Controller {

    protected $request;
    protected $response;
    protected $json;
    protected $view;

    public function __construct(){
        $this->request = Request::createFromGlobals();
        $this->response = new Response();
        $this->json = new JsonResponse();
        $this->view = new Template();
    }

    public function render($view, $data = array()){
        return $this->view->render($view, $data);
    }

    public function json($data = array()){
        return $this->json->setData($data);
    }

    public function redirect($url){
        return new RedirectResponse($url);
    }
}