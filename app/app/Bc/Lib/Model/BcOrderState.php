<?php
class BcOrderState extends AppModel {
	var $name = 'BcOrderState';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array(
		//TODO - name should be Text record
	);
	
	var $hasMany = array(
		'Order' => array(
			'className'		=> 'Order',
			'foreignKey'	=> 'Order.order_state_id'
		)
	);
}
?>