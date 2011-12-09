<?php
class BcTag extends AppModel {
	var $name = 'BcTag';
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