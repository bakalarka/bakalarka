<?php
class BcSettings extends AppModel {
	var $name = 'BcSettings';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array(
    	'value' => array(
    		'valueRule-1' => array (
    			'rule'    => 'notEmpty', //TODO - what should be accepted?
        	    'message' => '',
    		)
    	)
	);
	
	var $belongsTo = array(
		'SettingsType' => array(
			'className'		=> 'SettingsType',
			'foreignKey'	=> 'settings_type_id'
		),
		'Name' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'name_id'
		),
		'EditedBy' => array(
			'className'		=> 'user',
			'foreignKey'	=> 'user_id' //edited_by_id?
		)
	);
}
?>