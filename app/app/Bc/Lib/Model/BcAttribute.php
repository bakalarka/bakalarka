<?php
class BcAttribute extends AppModel {
	var $name = 'BcAttribute';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array(
    	'units' => array(
    		'unitsRule-1' => array (
    			'rule'    => 'alphaNumeric', //TODO - format?
        	    'message' => '',
    		),
    	)
    );
	
	var $belongsTo = array(
		'Name' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'name_id'
		)
	);
	
	var $hasMany = array(
		'AttributeProduct' => array(
			'className'		=> 'AttributeProduct',
			'foreignKey'	=> 'AttributeProduct.attribute_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'ProductType'
	);
}
?>