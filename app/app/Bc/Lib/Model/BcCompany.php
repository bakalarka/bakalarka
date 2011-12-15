<?php
class BcCompany extends AppModel {
	var $name = 'BcCompany';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array(
    	'name' => array(
    		'nameRule-1' => array (
    			'rule'    => 'notEmpty', //TODO - allowed chars?
        	    'message' => '',
    		),
    		'nameRule-2' => array (
    			'rule'    => 'notempty',
        	    'message' => '',
    		)
    	),
    	'id_number' => array(
    		'id_number-1' => array (
    			'rule'    => 'idNumber', 
        	    'message' => '',
    		)
    	),
    	'taxt_id_number' => array(
    		'taxt_id_number-1' => array (
    			'rule'    => 'taxIdNumber', 
        	    'message' => '',
    		)
    	),
    	'vat_number' => array(
    		'vat_number-1' => array (
    			'rule'    => 'vatNumber', 
        	    'message' => '',
    		)
    	),
	);
	
	var $hasMany = array(
		'Address' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'Address.company_id'
        ),
        'Order' => array(
            'className'		=> 'Order',
			'foreignKey'	=> 'Order.company_id'
        ),
	); 
	
	var $hasAndBelongsToMany = array(
		'User'
	);
}
?>