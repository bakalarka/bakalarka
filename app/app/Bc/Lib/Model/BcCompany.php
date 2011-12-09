<?php
class BcCompany extends AppModel {
	var $name = 'BcCompany';
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