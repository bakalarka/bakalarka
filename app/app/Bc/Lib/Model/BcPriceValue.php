<?php
class BcPriceValue extends AppModel {
	var $name = 'BcPriceValue';
	var $table = 'price_values';
	
	var $validation = array(
		'price' => array(
			'priceRule-1' => array(
				'rule' => array('decimal', 2),
				'message' => 'Price must be a decimal number.'
			),
			'required' => true
		)
	);
	
	var $belongsTo = array(
		'Price' => array(
			'className'		=> 'Price',
			'foreignKey'	=> 'price_id'
		),
		'Currency' => array(
			'className'		=> 'Currency',
			'foreignKey'	=> 'currency_id'
		)
	);
}
?>