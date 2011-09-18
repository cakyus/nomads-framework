<?php

class Index_Controller extends Nomads_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->assign('documentTitle', 'Welcome');
		$this->view->assign('pageTitle', 'Hello');
		$this->view->render('index.php');
	}
}
