<?php 

	class PendaftaranController extends Controller {

		public function index(){
			return $this->set('main',
				[
					'controller' => 'Pendaftaran',
					'method' => 'index',
					'title' => 'NihaoID - Formulir Pendaftaran'
				]);
		}

	}