<?php
class BcRelated extends AppModel {
	var $name = 'BcRelated';
	var $table = 'related';
	
	var $belognsTo = array(
		'Product' => array(
			'className'		=> 'Product',
			'foreignKey'	=> 'product_id'
		),
		'RelatedProduct' => array(
			'className'		=> 'Product',
			'foreignKey'	=> 'related_to_id'
		),
		'RelationType' => array(
			'className'		=> 'RelationType',
			'foreignKey'	=> 'relation_type_id'
		)
	);
}
?>