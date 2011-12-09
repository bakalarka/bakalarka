<?php
class BcText extends AppModel {
	var $name = 'BcText';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $belongsTo = array(
		'Default' => array(
			'className'		=> 'TextRecord',
			'foreignKey'	=> 'default_id'
		)
	);
	
	var $hasMany = array(
		'TextRecord' => array(
			'className'		=> 'TextRecord',
			'foreignKey'	=> 'TextRecord.text_id'
		)
		//used globaly, much more "hasMany"s
	);
}
?>