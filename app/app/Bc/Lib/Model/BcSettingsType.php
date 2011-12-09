<?php
class BcSettingsType extends AppModel {
	var $name = 'BcSettingsType';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMany = array(
		'Settings' => array(
			'className'		=> 'Settings',
			'foreignKey'	=> 'Settings.settings_type_id'
		)
	);
}
?>