<?php
class BcProductShippingMethod extends AppModel {
	var $name = 'BcProductShippingMethod';
	var $table = 'product_shipping_methods';
	
	var $validation = array(
    	//TODO validation Ratio
	);
	
	var $belongsTo = array(
		'ProductRecord' => array(
			'className'		=> 'ProductRecord',
			'foreignKey'	=> 'product_record_id'
		),
		'ShippingMethod' => array(
			'className'		=> 'ShippingMethod',
			'foreignKey'	=> 'shipment_method_id'
		)
	);

}
?>