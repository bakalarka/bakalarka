<?php 
App::uses('CakeEmail', 'Network/Email');
class BcUsersController extends AppController {	
	
	public $name 		= 'Users';
	public $uses 		= array( 
		'User'
	);
	
	public $recordsPerPage = 10;
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('index', 'login', 'logout', 'registration', 'confirm_registration', 'request_new_password');
	    
	    //global settings
	    $this->recordsPerPage = 10; //to replace by global setting;
	}

	//dashboard?
	public function index() {
		//		
	}
	
	//LOGIN	
	public function login() {
	   	if ($this->Auth->login()) {
        	$this->redirect($this->Auth->redirect());
    	} else {
        	$this->Session->setFlash(__('Invalid username or password, try again'));
    	}
	}

	//LOGOUT
	public function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	/** registration **/
	
	//make a new registration
	public function registration() {
		if ($user = $this->User->createNew($data)) {
			$this->_sendConfirmation($user);
			$this->Session->setFlash(__('Your account has been created. Please check your email for more information.'), 'default', array('class' => 'success'));
		}
		else {
			$this->Session->setFlash(__('Ooops. Something wrong. Please, try again.'), 'default', array('class' => 'failure'));
		}
	}
	
	//confirm registration
	public function confirm_registration($code) {
		if ($this->User->confirm($code))
			$this->Session->setFlash(__('Your account has been created. Please check your email for more information.'), 'default', array('class' => 'success'), 'info');
		else 
			$this->Session->setFlash(__('Ooops. Something wrong. Please, try again.'), 'default', array('class' => 'failure'), 'info');	
		$this->render('Elemetns/info');
	}
	
	/**
	 * request_new_password
	 * Request new password, if old is forgotten
	 */
	public function request_new_password() {
		if (!epmty($this->request->data)) {
			if ($id = $this->User->checkActiveMail($this->request->data['User']['email'])) {
				$pass = $this->User->newPass($id);
				if ($this->_sendNewPass($user, $pass)) {
					$this->Session->setFlash(__('Ooops. Something wrong. Please, try again.'), 'default', array('class' => 'failure'), 'info');
				}
				else	
					$this->Session->setFlash(__('If your email was in our system, a mail with new password has been send.'), 'default', array('class' => 'success'), 'info');
			}
			else 
				$this->Session->setFlash(__('If your email was in our system, a mail with new password has been send.'), 'default', array('class' => 'success'), 'info');
			
			$this->render('Elemetns/info');
		}
		
	}
	
	/** user profile **/
	
	/**
	 * profile
	 * Display profile data
	 */
	public function profile() {
		$this->set('profile', $this->User->profile($this->Auth->user('id')));
	}
	
	/**
	 * edit_user_data
	 * Edit user data
	 */
	public function edit_user_data() {
		if (!epmty($this->request->data)) {
			if ($this->User->editData($this->Auth->user('id'), $this->request->data)) {
				$this->Session->setFlash(__('Profile has been updates.'), 'default', array('class' => 'success'));
			}
			else 
				$this->Session->setFlash(__('Ooops. Something wrong. Please, try again.'), 'default', array('class' => 'failure'));
		}
		$this->redirect(array('action' => 'profile'));
	}
	
	/**
	 * edit_company_data
	 * Edit company data
	 */
	public function edit_compeny_data() {
		//
	}
	
	
	/** backend **/
	
	/**
	 * admin_index
	 * User listing
	 */
	public function admin_index() {
		$users = $this->paginate('User', array('limit' => $this->recordsPerPage));
		$this->set('users', $users);
	}
	
	/**
	 * admin_view_user
	 * Enter description here ...
	 * @param int $id
	 */
	public function admin_view_user($id) {
		//
	}
	
	/**
	 * admin_edit_user
	 * Edit userdata
	 */
	public function admin_edit_user() {
		if (!epmty($this->request->data)) {
			if ($this->User->editData($this->request->data['User']['id'], $this->request->data)) {
				$this->Session->setFlash(__('Profile has been updates.'), 'default', array('class' => 'success'));
			}
			else 
				$this->Session->setFlash(__('Ooops. Something wrong. Please, try again.'), 'default', array('class' => 'failure'));
		}
		$this->redirect(array('action' => 'admin_view_user'));
	}
	
	/**
	 * admin_edit_company
	 * Edit company data
	 */
	public function admin_edit_company() {
		//
	}
	
	/**
	 * admin_add_to_group
	 * Add user to group
	 */
	public function admin_add_to_group() {
		//
	}
	
	/**
	 * admin_remove_from_group
	 * Remove user from group
	 */
	public function admin_remove_from_group() {
		//	
	}
	
	/**
	 * admin_delete_user
	 * Delete user
	 */
	public function admin_delete_user() {
		if (!empty($this->request->data)) {
			if ($this->User->softDelete($id)) {
				$this->Session->setFlash(__('User has been deleted.'), 'default', array('class' => 'success'));
			}
			else {
				$this->Session->setFlash(__('Ooops. Something wrong. Please, try again.'), 'default', array('class' => 'failure'));
			}
		}
		$this->redirect($this->referer());
	}
	
	/**
	 * admin_disable_user
	 * Disable user
	 */
	public function admin_disable_user() {
		if (!empty($this->request->data)) {
			if ($this->User->disable($id)) {
				$this->Session->setFlash(__('User has been disabled.'), 'default', array('class' => 'success'));
			}
			else {
				$this->Session->setFlash(__('Ooops. Something wrong. Please, try again.'), 'default', array('class' => 'failure'));
			}
		}
		$this->redirect($this->referer());
	}
	
	/**
	 * admin_enable_user
	 * Enable user
	 */
	public function admin_enable_user() {
		if (!empty($this->request->data)) {
			if ($this->User->enable($id)) {
				$this->Session->setFlash(__('User has been enabled.'), 'default', array('class' => 'success'));
			}
			else {
				$this->Session->setFlash(__('Ooops. Something wrong. Please, try again.'), 'default', array('class' => 'failure'));
			}
		}
		$this->redirect($this->referer());
	}
	
	/**
	 * admin_activate_user
	 * Activate user
	 */
	public function admin_activate_user() {
		if (!empty($this->request->data)) {
			if ($this->User->activate($id)) {
				$this->Session->setFlash(__('User has been deleted.'), 'default', array('class' => 'success'));
			}
			else {
				$this->Session->setFlash(__('Ooops. Something wrong. Please, try again.'), 'default', array('class' => 'failure'));
			}
		}
		$this->redirect($this->referer());
	}
	
	/** utility functions **/
	
	//send registration confirmation email
	protected function _sendConfirmation($user) {
		return $this->sendMail('noReply', $user['User']['email'], __('New registration.'), __('Lorem ipsum')); //replace subject and message with global setting
	}
	
	//send email with new pass
	protected function _sendNewPass($user, $pass) {
		return $this->sendMail('noReply', $user['User']['email'], __('New password.'), __('Lorem ipsum')); //replace subject and message with global setting
	}
	
		
}
?>