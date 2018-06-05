<?php 

	class AboutUsController extends Controller {

		public function index(){
			return $this->set('main',
				[
					'controller' => 'AboutUs',
					'method' => 'index',
					'title' => 'NihaoID - Tentang Kami'
				]);
		}

	}