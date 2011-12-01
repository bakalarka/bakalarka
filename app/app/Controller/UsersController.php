<?php 
class UsersController extends AppController {	
	
	var $name 		= 'Users';
	var $helpers 	= array('Html'); //TODO - helpers are in app_controller, not needed here
	var $uses 		= array( 
		'User'
	);
	
	
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
		$this->Auth->authorize = 'actions';
	    
	}
	

	function index() {
		//		
	}
	
	//LOGIN	
	function login() {
		if ($this->Auth->login()) {
        	$this->redirect($this->Auth->redirect());
    	} else {
        	$this->Session->setFlash(__('Invalid username or password, try again'));
    	}
	}

	function logout() {
		$this->redirect($this->Auth->logout());
	}
		
}
?>