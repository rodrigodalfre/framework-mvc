<?php

//Especificação psr-4, espera que o script 
//contido dentro de um diretório esteja em um namespace compatível com aquele diretório
namespace App;

class Route {

	private $routes;

	public function __construct(){
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	public function getRoutes(){
		return $this->routes;
	}

	public function setRoutes(array $routes){
		$this->routes = $routes;
	}

	public function initRoutes() {
		
		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

		$this->setRoutes($routes);
	}

	public function run($url){
		foreach ($this->getRoutes() as $key => $route) {
			if($url == $route['route']){
				$class = "App\\Controllers\\".ucfirst($route['controller']);
				
				//Instancia de uma classe cujo o nome e o namespace foi formado dinamicamente.
				$controller = new $class;

				$action = $route['action'];

				$controller->$action();

			};
		}
	}

	public function getUrl() {
	# parse_url: ela recebe uma url, interpreta e retorna os componentes(array)
	# $_SERVER $_SERVER is an array containing information such as headers, paths, and script locations.
	# PHP_URL_PATH retorno apenas a string relativa a URL
	return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}

}


?>