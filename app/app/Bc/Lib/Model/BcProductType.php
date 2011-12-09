<?php
class BcProductType extends AppModel {
	var $name = 'BcProductType';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMeny = array(
		'Product' => array(
			'className'		=> 'Product',
			'foreignKey'	=> 'Product.product_type_id'
		),
		'Category' => array(
			'className'		=> 'Category',
			'foreignKey'	=> 'Category.product_type_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'ProductType'
	);
}
?>