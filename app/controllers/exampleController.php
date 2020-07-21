<?php
class exampleController extends controllerHelper{
    public function index(){
        // Array para mandar os dados vindo do model
        $data = array();
        $data['nome'] = 'Meu nome';
        $data['idade'] = '21';

        $this->loadView('example', $data);
    }
}