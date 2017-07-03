<?php 

/**
* 
*/
class router
{	
	protected $routes= [
		'GET'=> [],
		'POST'=> []
	];

	public function get($uri, $controller){
		$this->routes['GET'][$uri]=$controller;
	}

	public function post($uri,$controller){
		$this->routes['POST'][$uri]=$controller;
	}

	public static function load($file){

		$router = new static;

		require $file;

		return $router;

	}



	public function direct($uri,$method){

		if(array_key_exists($uri, $this->routes[$method])){
			return $this->callAction(...explode('@', $this->routes[$method][$uri]));
		}

		throw new Exception("No routes defined for this uri");
		
	}

	protected function callAction($controller, $action){


    	require_once('controllers/' . $controller . '.php');
		$controller= new $controller;

		if(!method_exists($controller, $action)){
			throw new Exception("{$controller} does not respond to {$action} action");
		}
		
		return $controller->$action();
	}


}


 ?>