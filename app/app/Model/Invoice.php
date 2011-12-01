<?php
class Invoice extends AppModel {
	var $name = 'Invoice';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $belongsTo = array(
		'ProviderAddress' => array(
			'className'		=> 'Address',
			'foreignKey'	=> 'provider_address_id'
		),
		'CustomerAddress' => array(
			'className'		=> 'Address',
			'foreignKey'	=> 'customer_address_id'
		)
	);
	
	var $hasMany = array(
		'Order' => array(
			'className'		=> 'Order',
			'foreignKey'	=> 'Order.invoice_id'
		),
		'InvoiceItem' => array(
			'className'		=> 'InvoiceItem',
			'foreignKey'	=> 'InvoiceItem.invoice_id'
		)
	);
}
?>