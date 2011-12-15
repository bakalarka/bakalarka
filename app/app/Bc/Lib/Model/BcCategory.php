<?php
class BcCategory extends AppModel {
	var $name = 'BcCategory';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array(
    	'alias' => array(
    		'nameRule-1' => array (
    			'rule'    => 'alphaNumericDashUnderscore',
        	    'message' => '',
    		),
    	)
	);
	
	var $belongsTo = array(
		'Parent' => array(
			'className'		=> 'Category',
			'foreignKey'	=> 'parent_id'
		),
		'ProductType' => array(
			'className'		=> 'ProductType',
			'foreignKey'	=> 'product_type_id'
		),
		'Name' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'name_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Product'
	);
}
?>