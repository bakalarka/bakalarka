<?php
class BcLanguage extends AppModel {
	var $name = 'BcLanguage';
	var $table = 'languages';
	
	var $validation = array(
		'abbreviation' => array(
			'abbreviationRule-1' => array(
				'rule' => 'alphaNumeric',
				'message' => 'No special characters nor spaces.'
			),
			'required' => true
		),
		'active' => array(
			'activeRateRule-1' => array(
				'rule' => 'boolean',
				'message' => 'Invalid checkbox value.'
			),
			'required' => true
		),
		'on_page' => array(
			'onPageRateRule-1' => array(
				'rule' => 'boolean',
				'message' => 'Invalid checkbox value.'
			),
			'required' => true
		)
	);
}
?>