<?php
class BcTax extends AppModel {
	var $name = 'BcTax';
	
	//TODO - validation rules
	var $validation = array();
	
	//needful?
	var $belongsTo = array(
		'Name' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'default_id'
		)
	);
	
	//needful?
	var $hasMany = array(
		'SlugRecord' => array(
			'className'		=> 'SlugRecord',
			'foreignKey'	=> 'SlugRecord.slug_id'
		)
	);
}
?>