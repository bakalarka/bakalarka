<?php
class BcTextRecord extends AppModel {
	var $name = 'BcTextRecord';
	var $table = 'text_records';
	
	var $validation = array(
    	'value' => array(
    		'valueRule-1' => array (
    			'rule'    => 'notEmpty',
        	    'message' => 'Can not left blank.',
    		),
    	)
	);
	
	var $belongsTo = array(
		'Text' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'text_id'
		),
		'Language' => array(
			'className'		=> 'Language',
			'foreignKey'	=> 'language_id'
		)
	);
}
?>