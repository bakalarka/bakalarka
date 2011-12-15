<?php
class BcOrderItem extends AppModel {
	var $name = 'BcOrderItem';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array(
		//amount
	);
	
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