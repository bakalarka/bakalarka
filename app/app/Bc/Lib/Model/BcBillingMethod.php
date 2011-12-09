<?php
class BcBillingMethod extends AppModel {
	var $name = 'BcBillingMethod';
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