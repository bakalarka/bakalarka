<?php
class BcGroup extends AppModel {
	var $name = 'BcGroup';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validate = array(
		//this should be an Text record
    	'name' => array(
    		'nameRule-1' => array (
    			'rule'    => 'alphaNumeric',
        	    'message' => '',
    		),
    		'nameRule-2' => array (
    			'rule'    => array('minLength', 2),
        	    'message' => '',
    		),
    		'nameRule-3' => array (
    			'rule'    => array('maxLength', 20),
        	    'message' => '',
    		),
    	)
	);
	
	var $hasAndBelongsToMany = array(
		'User'
	);
}
?>