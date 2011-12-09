<?php
class BcPriceValue extends AppModel {
	var $name = 'BcPriceValue';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
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