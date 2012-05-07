<?php
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
    			'rule'    => 'phone', //TODO - check if it needs improve
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
	
	public $hasMany = array(
		'Address' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'Address.user_id'
        ),
        'Order' => array(
        	'className'		=> 'Order',
			'foreignKey'	=> 'Order.user_id'
        )
	);
	
	public $hasAndBelongsToMany = array(
		'Company'
	);
	
	public $belongsTo = array(
		'Group',
	);
	
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
}
?>