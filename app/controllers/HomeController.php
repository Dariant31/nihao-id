<?php 
	
	class HomeController extends Controller
	{

		public function index(){
			return $this->set('main',
				[
				'controller' => 'Home',
				'method' => 'index',
				'title' => 'NihaoID - Homepage'
				]);

		}
		public function test(){
			echo "Anda di Test";
		}
		public function bruder(){
			echo "Anda itu bruder";
		}
	}



 ?>