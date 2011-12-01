<?php
class SettingsType extends AppModel {
	var $name = 'SettingsType';
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