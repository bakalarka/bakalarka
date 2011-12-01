<?php
class Product extends AppModel {
	var $name = 'Product';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $belongsTo = array(
		'ProductType' => array(
			'className'		=> 'ProductType',
			'foreignKey'	=> 'product_type_id'
		),
		'Name' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'name_id'
		),
		'ShortDescription' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'short_description_id'
		),
		'Description' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'description_id'
		),
		'Price' => array(
			'className'		=> 'Price',
			'foreignKey'	=> 'price_id'
		),
		'ProductState' => array(
			'className'		=> 'ProductState',
			'foreignKey'	=> 'product_state_id'
		),
	);
	
	var $hasMeny = array(
		'Related' => array(
			'className'		=> 'Related',
			'foreignKey'	=> 'Related.product_id'
		),
		'RelatedTo' => array(
			'className'		=> 'Related',
			'foreignKey'	=> 'Related.related_to_id'
		),
		'AttributeProduct' => array(
			'className'		=> 'AttributeProduct',
			'foreignKey'	=> 'AttributeProduct.product_id'
		),
		'OrderItem' => array(
			'className'		=> 'OrderItem',
			'foreignKey'	=> 'OrderItem.product_id'
		),
	);
	
	var $hasAndBelongsToMany = array(
		'Category',
		'Tag'
	);
}
?>