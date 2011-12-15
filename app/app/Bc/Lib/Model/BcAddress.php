<?php
class BcAddress extends AppModel {
	var $name = 'BcAddress';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array(
    	'street' => array(
    		'streetRule-1' => array (
    			'rule'    => 'notEmpty', //TODO - allowed format?
        	    'message' => '',
    		),
    	),
    	'zip' => array(
    		'zipRule-1' => array (
    			'rule'    => 'postal', //TODO - not cahnges needed?
        	    'message' => '',
    		),
    	),
    	'city' => array(
    		'cityRule-1' => array (
    			'rule'    => 'notEmpty', //TODO - allowed format?
        	    'message' => '',
    		),
    	)
	);
	
	var $belongsTo = array(
		'AddressType' => array(
			'className' => 'AddressType',
			'foreignKey' => 'address_type_id'
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id'
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id'
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id'
		),
	);
	
	var $hasMany = array(
		'BillingOrder' => array(
			'className' => 'Order',
			'foreignKey' => 'Order.billing_address_id'
		),
		'ShippingOrder' => array(
			'className' => 'Order',
			'foreignKey' => 'Order.shipping_address_id'
		),
		'ProviderInvoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'Invoice.provider_address_id'
		),
		'CustomerInvoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'Invoice.customer_address_id'
		),
	);
}
?>