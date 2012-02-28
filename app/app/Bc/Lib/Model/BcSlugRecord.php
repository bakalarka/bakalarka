<?php
class BcSlugRecord extends AppModel {
	var $name = 'BcSlugRecord';
	var $table = 'slug_records';
	
	var $validation = array(
		'value' => array(
			'valueRule-1' => array(
				'rule' => 'slug',
				'message' => 'Only small letters, digits and dashes.'
			),
			'valueRule-2' => array(
				'rule' => 'unique',
				'message' => 'Slug already exists.'
			)
		)
	);
	
	var $belongsTo = array(
		'Slug' => array(
			'className'		=> 'Slug',
			'foreignKey'	=> 'slug_id'
		),
		'Language' => array(
			'className'		=> 'Language',
			'foreignKey'	=> 'language_id'
		)
	);
	
	//comment
	function slug($check) {
		
		return true;
		
	}
}
?>