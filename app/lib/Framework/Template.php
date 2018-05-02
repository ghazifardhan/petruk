<?php

namespace Petruk\Framework;

use Symfony\Component\HttpFoundation\Response;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Twig_SimpleFunction;

class Template {

    protected $view;
    protected $response;
    
    public function __construct(){

        $this->response = new Response();
        
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../../../views');
        $this->view = new Twig_Environment($loader);
        $this->view->addFunction(new Twig_SimpleFunction('asset', function($asset) {
            return sprintf("/../../../assets/%s", ltrim($asset, '/'));
        }));
    }

    public function render($view, $data = array()){
        return $this->response->setContent($this->view->render($view . '.html', $data));
    }
}