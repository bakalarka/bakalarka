<?php
class BcText extends AppModel {
	var $name = 'BcText';
	var $table = 'texts';

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
	);
}
?>