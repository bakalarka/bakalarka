<?php
class BcCategory extends AppModel {
	var $name = 'BcCategory';
	var $table = 'categories';
	
	var $validation = array(
    	'parent_id' => array(
			'parentIdRule-1' => array (
    			'rule'    => 'parentExists', 
        	    'message' => 'Parent category does not exist.',
    		),
    		'allowEmpty' => true
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
		),
		'Slug'=> array(
			'className'		=> 'Slug',
			'foreignKey'	=> 'slug_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Product'
	);
	
	//comment
	function parentExists($check) {
		
	}
}
?>