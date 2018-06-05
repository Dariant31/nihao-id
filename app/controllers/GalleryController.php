<?php 

	class GalleryController extends Controller {

		public function index(){
			return $this->set('main',
				[
					'controller' => 'Gallery',
					'method' => 'index',
					'title' => 'NihaoID - Gallery'
				]);
		}

	}