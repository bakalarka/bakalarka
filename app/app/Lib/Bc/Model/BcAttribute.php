<?php
class BcAttribute extends AppModel {
	var $name = 'BcAttribute';
	var $table = 'attributes';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation'
		),
	);
	
	var $validation = array(
    	'units' => array(
    		'unitsRule-1' => array (
    			'rule'    => 'lettersNonLatinSpaceDotSlash', 
        	    'message' => 'Use only letters, spaces, dots and slashes.',
    		),
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