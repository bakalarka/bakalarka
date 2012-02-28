<?php
class BcProduct extends AppModel {
	var $name = 'BcProduct';
	var $table = 'products';
	
	var $validation = array(
    	'hidden' => array(
			'hiddenRule-1' => array(
				'rule' => 'boolean',
				'message' => 'Invalid checkbox value.'
			)
		),
		'deleted' => array(
			'deletedRule-1' => array(
				'rule' => 'boolean',
				'message' => 'Invalid checkbox value.'
			)
		)
	);
	
	var $belongsTo = array(
		'Slug' => array(
			'className'		=> 'Slug',
			'foreignKey'	=> 'slug_id'
		),
		'Record' => array(
			'className'		=> 'ProductRecord',
			'foreignKey'	=> 'product_record_id'
		)
	);
	
	var $hasMeny = array(
		'Related' => array(
			'className'		=> 'Related',
			'foreignKey'	=> 'Related.product_id'
		),
		'RelatedTo' => array(
			'className'		=> 'Related',
			'foreignKey'	=> 'Related.related_to_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Category',
		'Tag'
	);
}
?>