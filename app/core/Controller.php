<?php 

class Controller{

	public function set($layoutName, $data=[]){
		require_once 'app/views/Layout/' . $layoutName . '.php' ;
	}

	
}