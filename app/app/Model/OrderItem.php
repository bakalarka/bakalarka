<?php
class OrderItem extends AppModel {
	var $name = 'OrderItem';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $belongsTo = array(
		'Order' => array(
			'className'		=> 'Order',
			'foreignKey'	=> 'order_id'
		),
		'Product' => array(
			'className'		=> 'Product',
			'foreignKey'	=> 'product_id'
		)
	);
}
?>