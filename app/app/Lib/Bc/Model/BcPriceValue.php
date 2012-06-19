<?php
class BcPriceValue extends AppModel {
	var $name = 'BcPriceValue';
	var $table = 'price_values';
	
	var $validation = array(
		'price' => array(
			'priceRule-1' => array(
				'rule' => array('decimal', 2),
				'message' => 'Price must be a decimal number.'
			),
			'required' => true
		)
	);
	
	var $belongsTo = array(
		'Price' => array(
			'className'		=> 'Price',
			'foreignKey'	=> 'price_id'
		),
		'Currency' => array(
			'className'		=> 'Currency',
			'foreignKey'	=> 'currency_id'
		)
	);
	
	/**
	 * Create new price value
	 */
	public function createNew($priceId, $value = 0, $currencyId = 1) {
		$data = array(
			'PriceValue' => array(
				'price_id' => $priceId,
				'value' => $value,
				'currency_id' => $currencyId
			)
		);
		if ($this->save($data))
			return $this->getLastInsertID();
		return false;
	}
}
?>