<?php

namespace App\Controllers;

//Recursos do MF
use MF\Controller\Action;
use MF\Model\Container;

//Recursos models
use App\Models\Produto;
use App\Models\Info;



class IndexController extends Action {

    public function index(){

        $produto = Container::getModel('Produto');

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        //o caminho é a partir de index.php
        $this->render('index', 'layout1');
    }

    public function sobreNos(){

        $info = Container::getModel('Info');

        $this->view->dados = $info->getInfo();

        $this->render('sobreNos', 'layout2');
    }

    
}

?>