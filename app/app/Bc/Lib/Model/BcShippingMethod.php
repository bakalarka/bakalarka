<?php
class BcShippingMethod extends AppModel {
	var $name = 'BcShippingMethod';
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