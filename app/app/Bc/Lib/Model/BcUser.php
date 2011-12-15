<?php
class BcUser extends AppModel {
	var $name = 'BcUser';
	var $primaryKey = 'id';
	
	//TODO - error messages
	var $validate = array(
		'id' => array(
	        'rule' => 'blank',
	        'on'   => 'create'
    	),
    	'username' => array(
    		'usernameRule-1' => array (
    			'rule'    => 'alphaNumeric',
        	    'message' => '',
    		),
    		'usernameRule-2' => array (
    			'rule'    => array('minLength', 2),
        	    'message' => '',
    		),
    		'usernameRule-3' => array (
    			'rule'    => array('maxLength', 20),
        	    'message' => '',
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
    			'rule'    => 'lettersNonLatin',
        	    'message' => '',
    		),
    	),
    	'surname' => array(
    		'surnameRule-1' => array (
    			'rule'    => 'lettersNonLatin',
        	    'message' => '',
    		),
    	),
    	'phone' => array(
    		'phoneRule-1' => array (
    			'rule'    => 'phone', //TODO - check if it needs improve
        	    'message' => '',
    		),
    	),
    	'registration_code' => array(
    		'registration_codeRule-1' => array (
    			'rule'    => 'alphaNumericDashUnderscore',
        	    'message' => '',
    		),
    	)
		
	);
	
	var $hasMany = array(
		'Address' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'Address.user_id'
        )
	);
	
	var $hasAndBelongsToMany = array(
		'Group',
		'Company'
	);
}
?>