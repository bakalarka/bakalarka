<?php
class BcUser extends AppModel {
	var $name = 'BcUser';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validate = array();
	
	var $hasMany = array(
		'Address' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'Address.user_id'
        )
	);
	
	var $hasAndBelongsToMany = array(
		'Group',
		'Company'
	);
}
?>