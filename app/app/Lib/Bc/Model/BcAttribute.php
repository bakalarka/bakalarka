<?php
class BcAttribute extends AppModel {
	var $name = 'BcAttribute';
	var $table = 'attributes';
	
	var $validation = array(
    	'units' => array(
    		'unitsRule-1' => array (
    			'rule'    => 'lettersNonLatinSpaceDotSlash', 
        	    'message' => 'Use only letters, spaces, dots and slashes.',
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