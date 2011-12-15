<?php
class BcInvoice extends AppModel {
	var $name = 'BcInvoice';
	var $primaryKey = 'id';
	
	//TODO - validation rules, validate system generated values?
	var $validation = array(
    	'invoice_numbers' => array(
    		'invoice_numbersRule-1' => array (
    			'rule'    => 'alphaNumeric', //TODO - format
        	    'message' => '',
    		)
    	),
    	'provider_account' => array(
    		'provider_accountRule-1' => array (
    			'rule'    => 'notEmpty', //TODO - bank acccount format
        	    'message' => '',
    		)
    	),
    	'customer_account' => array(
    		'customer_accountRule-1' => array (
    			'rule'    => 'notEmpty', //TODO - bank acccount format
        	    'message' => '',
    		)
    	)
    );
	
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