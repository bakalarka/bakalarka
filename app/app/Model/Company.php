<?php
class Company extends AppModel {
	var $name = 'Company';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMany = array(
		'Address' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'Address.company_id'
        ),
        'Order' => array(
            'className'		=> 'Order',
			'foreignKey'	=> 'Order.company_id'
        ),
	); 
	
	var $hasAndBelongsToMany = array(
		'User'
	);
}
?>