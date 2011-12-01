<?php
class TextRecord extends AppModel {
	var $name = 'TextRecord';
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