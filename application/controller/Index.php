<?php

class Index_Controller extends Nomads_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->set('documentTitle', 'Welcome');
		$this->view->set('pageTitle', 'Hello');
		$this->view->show('index.php');
	}
}
