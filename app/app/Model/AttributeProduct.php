<?php
class AttributeProduct extends AppModel {
	var $name = 'AttributeProduct';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $belongsTo = array(
		'Attribute' => array(
			'className'		=> 'Attribute',
			'foreignKey'	=> 'attribute_id'
		),
		'Product' => array(
			'className'		=> 'Product',
			'foreignKey'	=> 'product_id'
		)
	);
	
}
?>