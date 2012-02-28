<?php
class BcTax extends AppModel {
	var $name = 'BcTax';
	var $table = 'taxes';
	
	var $validation = array(
		'value' => array(
			'valueRule-1' => array(
				'rule' => 'decimal',
				'message' => 'Only valid decimal number.'
			),
			'required' => true
		),
	);
	
	var $belongsTo = array(
		'Name' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'default_id'
		)
	);
}
?>