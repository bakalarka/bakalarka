<?php 
class BcUsersController extends AppController {	
	
	var $name 		= 'Users';
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

	//LOGOUT
	function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	/** registration **/
	
	//make a new registration
	function registration() {
		//
	}
	
	//
	function confirm_registration($code) {
		//
	}
	
	/** user profile **/
	
	//display user profile
	function display_profile() {
		
	}
	
	//change my settings
	function change_settings() {
		
	}
	
	
	/** utility functions **/
	
	//create new user record
	function _createUser($user) {
		//
	}
	
	//send registration confirmation email
	function _sendConfirmation($user, $code) {
		//
	}
	
	
		
}
?>