<?php
class BcOrder extends AppModel {
	var $name = 'BcOrder';
	var $table = 'orders';
	
	var $belongsTo = array(
		'Invoice' => array(
			'className'		=> 'Invoice',
			'foreignKey'	=> 'invoice_id'
		),
		'User' => array(
			'className'		=> 'User',
			'foreignKey'	=> 'user_id'
		),
		'Company' => array(
			'className'		=> 'Company',
			'foreignKey'	=> 'company_id'
		),
		'OrderState' => array(
			'className'		=> 'OrderState',
			'foreignKey'	=> 'order_state_id'
		),
		'BillingAddress' => array(
			'className'		=> 'Address',
			'foreignKey'	=> 'billing_address_id'
		),
		'ShippingAddress' => array(
			'className'		=> 'Address',
			'foreignKey'	=> 'shipping_address_id'
		),
		'BillingMethod' => array(
			'className'		=> 'BillingMethod',
			'foreignKey'	=> 'billing_method_id'
		),
		'ShippingMethod' => array(
			'className'		=> 'ShippingMethod',
			'foreignKey'	=> 'shiping_method_id'
		),
		'Currency' => array(
			'className'		=> 'Currency',
			'foreignKey'	=> 'currency_id'
		)
	);
	
	var $hasMany = array(
		'OrderItem' => array(
			'className'		=> 'OrderItem',
			'foreignKey'	=> 'OrderItem.order_id'
		),
		'Shipment' => array(
			'className'		=> 'Shipment',
			'foreignKey'	=> 'Shipment.order_id'
		)
	);
}
?>