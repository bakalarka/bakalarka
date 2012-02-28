<?php
class BcOrderItem extends AppModel {
	var $name = 'BcOrderItem';
	var $primaryKey = 'id';
	
	var $validation = array(
		'amount' => array(
			'amountRule-1' => array(
				'rule' => 'positiveInteger',
				'message' => 'Amount must be positive whole number.'
			)
		)
	);
	
	var $belongsTo = array(
		'Order' => array(
			'className'		=> 'Order',
			'foreignKey'	=> 'order_id'
		),
		'Product' => array(
			'className'		=> 'ProductRecord',
			'foreignKey'	=> 'product_record_id'
		)
	);
}
?>