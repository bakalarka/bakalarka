<?php
class BcUser extends AppModel {
	var $name = 'BcUser';
	var $table = 'users';
	
	var $validate = array(
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
	
	var $hasMany = array(
		'Address' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'Address.user_id'
        ),
        'Order' => array(
        	'className'		=> 'Order',
			'foreignKey'	=> 'Order.user_id'
        )
	);
	
	var $hasAndBelongsToMany = array(
		'Group',
		'Company'
	);
}
?>