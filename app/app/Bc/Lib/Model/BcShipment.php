<?php
class BcShipment extends AppModel {
	var $name = 'BcShipment';
	var $table = 'shipments';
	
	var $belongsTo = array(
		'ShippingMethod' => array(
			'className'		=> 'ShippingMethod',
			'foreignKey'	=> 'shipping_method_id'
		),
		'Order' => array(
			'className'		=> 'Order',
			'foreignKey'	=> 'order_id'
		)
	);
	
	var $hasMany = array(
		'OrderItem' => array(
			'className'		=> 'OrderItem',
			'foreignKey'	=> 'OrderItem.shipment_id'
		)
	);
}
?>