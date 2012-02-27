<?php
class BcSlug extends AppModel {
	var $name = 'BcSlug';
	
	//TODO - validation rules
	var $validation = array();
	
	var $belongsTo = array(
		'Default' => array(
			'className'		=> 'SlugRecord',
			'foreignKey'	=> 'default_id'
		)
	);
	
	var $hasMany = array(
		'SlugRecord' => array(
			'className'		=> 'SlugRecord',
			'foreignKey'	=> 'SlugRecord.slug_id'
		)
	);
}
?>