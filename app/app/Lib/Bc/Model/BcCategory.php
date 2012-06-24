<?php
class BcCategory extends AppModel {
	var $name = 'BcCategory';
	var $table = 'categories';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation',
			'slug' => 'slugTranslation'
		),
	);
	
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
		/** deprecated
		'ProductType' => array(
			'className'		=> 'ProductType',
			'foreignKey'	=> 'product_type_id'
		)*/
	);
	
	var $hasAndBelongsToMany = array(
		'Product'
	);
	
	//comment
	function parentExists($check) {
		
	}
}
?>