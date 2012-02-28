<?php
class BcPrice extends AppModel {
	var $name = 'BcPrice';
	var $tables = 'prices';
	
	var $belongsTo = array(
		'Default' => array(
			'className'		=> 'PriceValue',
			'foreignKey'	=> 'default_id'
		)
	);
	
	var $hasMany = array(
		'PriceValue' => array(
			'className'		=> 'PriceValue',
			'foreignKey'	=> 'PriceValue.price_id'
		)
	);
}
?>