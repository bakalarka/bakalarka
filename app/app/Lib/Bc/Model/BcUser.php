<?php
App::uses('AuthComponent', 'Controller/Component');
class BcUser extends AppModel {
	public $name = 'BcUser';
	public $table = 'users';
	
	public $actsAs = array('Acl' => array('type' => 'requester'));
	
	public $validate = array(
		'id' => array(
	        'rule' => 'blank',
	        'on'   => 'create'
    	),
    	'username' => array(
    		'usernameRule-1' => array (
    			'rule'    => 'alphaNumeric',
        	    'message' => 'Only latin letters and digits.',
    		),
    		'usernameRule-2' => array (
    			'rule'    => array('minLength', 2),
        	    'message' => 'Minimal length is 2 characters.',
    		),
    		'usernameRule-3' => array (
    			'rule'    => array('maxLength', 20),
        	    'message' => 'Maximal length is 20 characters.',
    		),
    	),
   		'password' => array(
    		'passwordRule-1' => array (
    			'rule'    => array('minLength', 8),
        	    'message' => '',
    		),
    	),
    	'email' => array(
    		'emailRule-1' => array (
    			'rule'    => 'email',
        	    'message' => '',
    		),
    	
    	),
    	'name' => array(
    		'nameRule-1' => array (
    			'rule'    => 'lettersNonLatinSpaceDot',
        	    'message' => 'Only letters, spaces and dots.',
    		),
    	),
    	'surname' => array(
    		'surnameRule-1' => array (
    			'rule'    => 'lettersNonLatinSpaceDot',
        	    'message' => 'Only letters, spaces and dots.',
    		),
    	),
    	'phone' => array(
    		'phoneRule-1' => array (
    			'rule'    => 'notEmpty', //'phone', //TODO - check if it needs improve
        	    'message' => 'Ivalid phone number',
    		),
    	),
    	'registration_code' => array(
    		'registration_codeRule-1' => array (
    			'rule'    => 'alphaNumericDashUnderscore',
        	    'message' => '',
    		),
    	)
		
	);
	
	public $hasOne = array(
		'Address' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'user_id',
			'conditions' 	=> array(
				'Address.address_type_id' => 1,
				'Address.active' => 1
			)
        )
    );
	
	public $hasMany = array(
		'AddressBook' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'user_id'
        ),
        'Order' => array(
        	'className'		=> 'Order',
			'foreignKey'	=> 'user_id'
        )
	);
	
	public $hasAndBelongsToMany = array(
		'Company'
	);
	
	public $belongsTo = array(
		'Group',
	);
	
	public function beforeSave() {
        //if (isset($this->data['User']['password']))
        	//$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
	}
	
	public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('id' => $groupId));
        }
    }
    
	public function bindNode($user) {
	    return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
	}
	
	/**
	 * Create new user
	 */
	public function createNew($data) {
		if (isset($data['User']) && isset($data['Address'])) {
			$data['User']['active'] = 0;
			$data['User']['disabled'] = 0;
			$data['User']['deleted'] = 0;
			$data['User']['password'] = AuthComponent::password($data['User']['password']);
			
			$user = $this->save($data['User']);
			
			$data['Address']['address_type_id'] = 1;
			$data['Address']['user_id'] = $this->getLastInsertID();
			$data['Address']['active'] = 1;
			
			$address = $this->Address->save($data['Address']);
			
			if (((bool) $user) && ((bool) $address)) {
				$this->unbindModel(array('hasMany' => array('Order')));
				return $this->read(null, $this->getLastInsertID());
			}
			return false;
			
		}
		return false;
	}
	
	/**
	 * Confirm registration
	 */
	public function confirm($code) {		
		if ($id = $this->field('id', array('registration_code' => $code, 'active' => 0))) {
			return $this->save(array('id' => $id, 'active' => 1));
		}
		return false;
	}

	/**
	 * Check mail
	 */
	public function checkMail($email, $scope = array()) {
		$scope['email'] = $email;
		return $this->field('id', $scope);
	}
	
	/**
	 * Check mail of active user 
	 */
	public function checkActiveMail($email) {
		return $this->checkMail($email, array('active' => 1, 'deleted' => 0, 'disabled' => 0));
	}
	
	/**
	 * Create new pass for user
	 */
	public function newPass($id) {
		$this->recursive = -1;
		$newPass = $this->randomString(); //random string length from global settings
		if ($this->read(null, $id)) {
			if ($this->saveField('password', AuthComponent::password($newPass)))
				return $newPass;
		}
		return false;
	}

	/** 
	 * Get user profile
	 */
	public function profile($id) {
		$this->unbindModel(array('hasMany' => array('Order', 'AddressBook')));
		return $this->read(null, $id);
	}
	
	/**
	 * Edit data
	 */
	public function editData($id, $data) {
		$this->unbindModel(array('hasMany' => array('Order', 'AddressBook')));
		$user = $this->read(null, $id);
		$user['User']['username'] = $data['User']['username'];
		$user['User']['password'] = AuthComponent::password($data['User']['password']);
		$user['User']['email'] = $data['User']['email'];
		$user['User']['name'] = $data['User']['name'];
		$user['User']['surname'] = $data['User']['surname'];
		$user['User']['phone'] = $data['User']['phone'];
		
		return $this->save($user['User']) && $this->Address->edit($user['Address']['id'], $data['Address']);
	}
	
	/**
	 * Soft delete
	 */
	public function softDelete($id) {
		$this->recursive = -1;
		if (!$this->read(null, $id))
			return false;
		return $this->saveField('deleted', 1);
	}
	
	/**
	 * Disable
	 */
	public function disable($id) {
		$this->recursive = -1;
		if (!$this->read(null, $id))
			return false;
		return $this->saveField('disabled', 1);
	}
	
	/**
	 * Enable
	 */
	public function enable($id) {
		$this->recursive = -1;
		if (!$this->read(null, $id))
			return false;
		return $this->saveField('disabled', 0);
	}
	
	/**
	 * Activate
	 */
	public function activate($id) {
		$this->recursive = -1;
		if (!$this->read(null, $id))
			return false;
		return $this->saveField('active', 1);
	}
	
}
?>