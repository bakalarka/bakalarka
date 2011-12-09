<?php
class BcTextRecord extends AppModel {
	var $name = 'BcTextRecord';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
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