<?php
class Related extends AppModel {
	var $name = 'Related';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
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