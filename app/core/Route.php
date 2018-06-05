<?php 

class Route{

	protected $controller 	= 'HomeController';
	protected $method		= 'index';
	protected $params 		= [];


	public function __construct(){

		/* Catch url, filter and sanitize them*/
		if (isset($_GET['url'])) {
			$url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL) );
		}else{
		    $url[0]=Home;
		}

		/* The first parameter in url will be controller*/
		/*this section will take the controller from url*/
		/*and call the appropiate controller file in app/controllers*/
		$url[0] = $url[0] . 'Controller';

		/*Check wether the controller file exist or not*/
		if (file_exists('app/controllers/' . $url[0] . '.php')) {
			$this->controller = $url[0];
		}else{
			return require_once 'app/views/Error/404.php';
		}

		require_once 'app/controllers/' . $this->controller . '.php';

		/*Initiate object*/
		$this->controller = new $this->controller;


		/*Check wether the Methode exist and assign it to method var*/
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
			}else{
				return require_once 'app/views/Error/404.php';
			}
		}else{
			$this->method = 'index';
		}

		/*delete other elements in url array, and assign the rest to params array*/
		unset($url[0]);
		unset($url[1]);
		$this->params = $url;

		call_user_func_array([$this->controller, $this->method], $this->params);

	}
}