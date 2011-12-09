<?php
class BcAttributeProduct extends AppModel {
	var $name = 'BcAttributeProduct';
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