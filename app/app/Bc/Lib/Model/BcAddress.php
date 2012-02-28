<?php
class BcAddress extends AppModel {
	var $name = 'BcAddress';
	var $table = 'addresses';
	
	var $validation = array(
    	'street' => array(
    		'streetRule-1' => array (
    			'rule'    => 'notEmpty', //TODO - allowed format?
        	    'message' => '',
    		),
    	),
    	'zip' => array(
    		'zipRule-1' => array (
    			'rule'    => 'postal', //TODO - not cahnges needed?
        	    'message' => 'ZIP code is not valid.',
    		),
    	),
    	'city' => array(
    		'cityRule-1' => array (
    			'rule'    => 'notEmpty', 
        	    'message' => 'City can\'t be empty.',
    		),
    		'cityRule-2' => array (
    			'rule'    => 'lettersNonLatinSpaceDot', 
        	    'message' => 'City can contains letters, spaces and dots.',
    		),
    	)
	);
	
	var $belongsTo = array(
		'AddressType' => array(
			'className' => 'AddressType',
			'foreignKey' => 'address_type_id'
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id'
		),
	);
	
}
?>