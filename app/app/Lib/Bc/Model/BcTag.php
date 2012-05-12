<?php
class BcTag extends AppModel {
	var $name = 'BcTag';
	var $table = 'tags';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation',
		),
	);
	
	var $belongsTo = array(
		'ProductType' => array(
			'className'		=> 'ProductType',
			'foreignKey'	=> 'product_type_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Product' => array(
			'conditions' => array(
				'Product.hidden' => 0,
				'Product.deleted' => 0
			)
		)
	);
}
?>