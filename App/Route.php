<?php

//Especificação psr-4, espera que o script 
//contido dentro de um diretório esteja em um namespace compatível com aquele diretório
namespace App;

class Route {

	public function initRoutes() {
		
		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => 'sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);
	}

    public function getUrl() {
		# parse_url: ela recebe uma url, interpreta e retorna os componentes(array)
		# $_SERVER $_SERVER is an array containing information such as headers, paths, and script locations.
		# PHP_URL_PATH retorno apenas a string relativa a URL
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}


?>