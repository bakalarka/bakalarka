<?php
class BcShippingMethod extends AppModel {
	var $name = 'BcShippingMethod';
	var $table = 'shipping_methods';
	
	var $validation = array(
		'active' => array(
			'activeRule-1' => array(
				'rule' => 'boolean',
				'message' => 'Invalid checkbox value.'
			)
		)
	);
}
?>