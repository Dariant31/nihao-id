<?php 

	class AlamatController extends Controller {

		public function index(){
			return $this->set('main',
				[
					'controller' => 'Alamat',
					'method' => 'index',
					'title' => 'NihaoID - Alamat Kami'
				]);
		}

	}