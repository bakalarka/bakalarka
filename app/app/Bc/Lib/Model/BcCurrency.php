<?php
class BcCurrency extends AppModel {
	var $name = 'BcCurrency';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMany = array(
		'PriceValue' => array(
			'className'		=> 'PriceValue',
			'foreignKey'	=> 'PriceValue.currency_id'
		)
	);
}
?>