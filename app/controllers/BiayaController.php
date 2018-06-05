<?php 

	class BiayaController extends Controller {

		public function index(){
			return $this->set('main',
				[
					'controller' => 'Biaya',
					'method' => 'index',
					'title' => 'NihaoID - Biaya'
				]);
		}

	}