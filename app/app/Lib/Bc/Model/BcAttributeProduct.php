<?php
class BcAttributeProduct extends AppModel {
	var $name = 'BcAttributeProduct';
	var $table = 'attribute_products';
	
	var $validation = array(
		'value' => array(
			'allowEmpty' => true
		)
	);
	
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