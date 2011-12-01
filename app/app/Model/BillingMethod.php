<?php
class BillingMethod extends AppModel {
	var $name = 'BillingMethod';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMany = array(
		'Order' => array(
			'className'		=> 'Order',
			'foreignKey'	=> 'Order.billing_method_id'
		)
	);
}
?>