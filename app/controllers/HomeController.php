<?php

namespace Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Model\User;

class HomeController extends Controller {

    public function __construct(){
        parent::__construct();
    }

    public function test($id){

        $nama = $this->request->get('name');

        $data = [
            'name' => $nama,
            'id' => $id
        ];

        return $this->json($data);
    }

    public function home(){

        $users = User::all();
        // return $this->json($users);
        return $this->render('home', array('name' => 'Ghazi', 'users' => $users));
    }

}