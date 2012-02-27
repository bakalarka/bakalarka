<?php
class BcSlugRecord extends AppModel {
	var $name = 'BcSlugRecord';
	
	//TODO - validation rules
	var $validation = array();
	
	var $belongsTo = array(
		'SlugRecord' => array(
			'className'		=> 'Slug',
			'foreignKey'	=> 'slug_id'
		)
	);
}
?>