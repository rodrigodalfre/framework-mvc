<?php

namespace App\Controllers;

class IndexController {

    private $view;

    public function __construct(){
        //A classe stdClass() é uma classe nativa do PHP.  
        //Atraves dela é possível criar objetos padrões 
        $this->view = new \stdClass();
    }

    public function index(){

        $this->view->dados = array('Sofá', 'Cadeira', 'Cama');
        //o caminho é a partir de index.php
        $this->render('index');
    }

    public function sobreNos(){

        $this->view->dados = array('Notebook',  'Celular');
        $this->render('sobreNos');
    }

    public function render($view){
 
        #echo get_class($this);
        $classAtual = get_class($this);
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
        $classAtual = strtolower(str_replace('Controller', '', $classAtual));
        
        require_once "../App/Views/".$classAtual."/".$view.".phtml";
    }
}

?>