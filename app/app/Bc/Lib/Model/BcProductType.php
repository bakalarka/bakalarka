<?php
class BcProductType extends AppModel {
	var $name = 'BcProductType';
	var $table = 'product_types';
	
	var $hasMany = array(
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
		'Attribute'
	);
}
?>