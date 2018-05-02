<?php

namespace Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;

use Twig_Loader_Filesystem;
use Twig_Environment;

class Controller {

    protected $request;
    protected $response;
    protected $json;
    protected $view;

    public function __construct(){
        $this->request = Request::createFromGlobals();
        $this->response = new Response();
        $this->json = new JsonResponse();

        $loader = new Twig_Loader_Filesystem(__DIR__.'/../../views');
        $this->view = new Twig_Environment($loader);
    }

    public function render($view, $data = array()){
        return $this->response->setContent($this->view->render($view . '.html.twig', $data));
    }

    public function json($data = array()){
        return $this->json->setData($data);
    }
}