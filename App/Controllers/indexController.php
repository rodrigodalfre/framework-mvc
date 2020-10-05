<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action {

    public function index(){

        $this->view->dados = array('Sofá', 'Cadeira', 'Cama');
        //o caminho é a partir de index.php
        $this->render('index', 'layout1');
    }

    public function sobreNos(){

        $this->view->dados = array('Notebook',  'Celular');
        $this->render('sobreNos', 'layout2');
    }

    
}

?>