<?php
class OrderState extends AppModel {
	var $name = 'OrderState';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMany = array(
		'Order' => array(
			'className'		=> 'Order',
			'foreignKey'	=> 'Order.order_state_id'
		)
	);
}
?>