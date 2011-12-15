<?php
class BcTextRecord extends AppModel {
	var $name = 'BcTextRecord';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array(
    	'value' => array(
    		'valueRule-1' => array (
    			'rule'    => 'lettersNonLatin',
        	    'message' => '',
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