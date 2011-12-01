<?php
class ShippingMethod extends AppModel {
	var $name = 'ShippingMethod';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMany = array(
		'Order' => array(
			'className'		=> 'Order',
			'foreignKey'	=> 'Order.shipping_method_id'
		)
	);
}
?>