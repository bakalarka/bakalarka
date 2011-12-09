<?php
class BcAddressType extends AppModel {
	var $name = 'BcAddressType';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMany = array(
		'Address' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'Address.address_type_id'
        )
	);
}
?>