<?php
class BcAttribute extends AppModel {
	var $name = 'BcAttribute';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
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