<?php
class BcTax extends AppModel {
	var $name = 'BcTax';
	var $table = 'taxes';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation',
		),
	);
	
	var $validation = array(
		'value' => array(
			'valueRule-1' => array(
				'rule' => 'decimal',
				'message' => 'Only valid decimal number.'
			),
			'required' => true
		),
	);
}
?>