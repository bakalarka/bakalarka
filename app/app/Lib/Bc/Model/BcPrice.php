<?php
class BcPrice extends AppModel {
	var $name = 'BcPrice';
	var $tables = 'prices';
	
	var $belongsTo = array(
		'Default' => array(
			'className'		=> 'PriceValue',
			'foreignKey'	=> 'default_id'
		)
	);
	
	var $hasMany = array(
		'PriceValue' => array(
			'className'		=> 'PriceValue',
			'foreignKey'	=> 'price_id'
		)
	);
	
	/**
	 * Create new Image gallery
	 */
	public function createNew() {
		$this->create();
		if (!$this->save())
			return false;
		$currentId = $this->getLastInsertID();
		if (!$priceValue = $this->PriceValue->createNew($currentId))
			return false;
		$data = array(
			'Price' => array(
				'id' => $currentId,
				'default_id' => $priceValue
			)
		);
		if ($this->save($data))
			return $this->getLastInsertID();
		return false;
	}
}
?>