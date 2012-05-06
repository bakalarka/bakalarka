<?php
class BcInvoice extends AppModel {
	var $name = 'BcInvoice';
	var $table = 'invoices';
	
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
	
	var $hasOne = array(
		'Order' => array(
			'className'		=> 'Order',
			'foreignKey'	=> 'Order.invoice_id'
		)
	);
	
	var $hasMany = array(
		'InvoiceItem' => array(
			'className'		=> 'InvoiceItem',
			'foreignKey'	=> 'InvoiceItem.invoice_id'
		)
	);
}
?>