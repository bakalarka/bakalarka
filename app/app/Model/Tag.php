<?php
class Tag extends AppModel {
	var $name = 'Tag';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $belongsTo = array(
		'ProductType' => array(
			'className'		=> 'ProductType',
			'foreignKey'	=> 'product_type_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Product'
	);
}
?>