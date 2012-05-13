<?php
class BcProductShippingMethod extends AppModel {
	var $name = 'BcProductShippingMethod';
	var $table = 'product_shipping_methods';
	
	var $validation = array(
    	//TODO validation Ratio
	);
	
	var $belongsTo = array(
		'Product' => array(
			'className'		=> 'Product',
			'foreignKey'	=> 'product_id'
		),
		'ShippingMethod' => array(
			'className'		=> 'ShippingMethod',
			'foreignKey'	=> 'shipping_method_id'
		)
	);

}
?>