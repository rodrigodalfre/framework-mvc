<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action {

    public function index(){

        //$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

        //Instancia da conexão
        $conn = Connection::getDb();

        //Instancia do modelo
        $produto = new Produto($conn);

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        //o caminho é a partir de index.php
        $this->render('index', 'layout1');
    }

    public function sobreNos(){

        //$this->view->dados = array('Notebook',  'Celular');



        $this->render('sobreNos', 'layout2');
    }

    
}

?>