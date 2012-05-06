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
	
	//confirm registration
	function confirm_registration($code) {
		//
	}
	
	/**
	 * request_new_password
	 * Request new password, if old is forgotten
	 */
	function request_new_password() {
		//
	}
	
	/** user profile **/
	
	/**
	 * profile
	 * Display profile data
	 */
	function profile() {
		
	}
	
	/**
	 * edit_user_data
	 * Edit user data
	 */
	function edit_user_data() {
		//
	}
	
	/**
	 * edit_company_data
	 * Edit company data
	 */
	function edit_compeny_data() {
		//
	}
	
	
	/** backend **/
	
	/**
	 * admin_index
	 * User listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_view_user
	 * Enter description here ...
	 * @param int $id
	 */
	function admin_view_user($id) {
		//
	}
	
	/**
	 * admin_edit_user
	 * Edit userdata
	 */
	function admin_edit_user() {
		//
	}
	
	/**
	 * admin_edit_company
	 * Edit company data
	 */
	function admin_edit_company() {
		//
	}
	
	/**
	 * admin_add_to_group
	 * Add user to group
	 */
	function admin_add_to_group() {
		//
	}
	
	/**
	 * admin_remove_from_group
	 * Remove user from group
	 */
	function admin_remove_from_group() {
		//	
	}
	
	/**
	 * admin_delete_user
	 * Delete user
	 */
	function admin_delete_user() {
		//	
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