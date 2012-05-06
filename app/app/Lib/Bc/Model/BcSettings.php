<?php
class BcSettings extends AppModel {
	var $name = 'BcSettings';
	var $table = 'settings';
	
	var $validation = array(
    	'value' => array(
    		'valueRule-1' => array (
    			'rule'    => 'notEmpty', 
        	    'message' => 'Set some value.',
    		),
    		'required' => true
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
			'className'		=> 'User',
			'foreignKey'	=> 'edited_by_id'
		),
		
	);
}
?>