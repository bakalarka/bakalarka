<?php
class BcCurrency extends AppModel {
	var $name = 'BcCurrency';
	var $table = 'currencies';
	
	var $validation = array(
		'abbreviation' => array(
			'abbreviationRule-1' => array(
				'rule' => 'alphaNumeric',
				'message' => 'No special characters nor spaces.'
			),
			'required' => true
		),
		'symbol' => array(
			'symbolRule-1' => array(
				'rule' => array('maxLength', 1),
				'message' => 'Use just 1 character.'
			),
			'allowEmpty' => true
		),
		'exchange_rate' => array(
			'exchangeRateRule-1' => array(
				'rule' => 'decimal',
				'message' => 'Only valid decimal number.'
			),
			'required' => true
		),
		'active' => array(
			'activeRule-1' => array(
				'rule' => 'boolean',
				'message' => 'Invalid checkbox value.'
			),
			'required' => true
		),
		'default' => array(
			'defaultRule-1' => array(
				'rule' => 'boolean',
				'message' => 'Invalid checkbox value.'
			),
			'required' => true
		)
	);
	
}
?>