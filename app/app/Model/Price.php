<?php
class Price extends AppModel {
	var $name = 'Price';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
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
		//used globaly, much more "hasMany"s
	);
}
?>