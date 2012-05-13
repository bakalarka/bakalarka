<?php
class BcProduct extends AppModel {
	var $name = 'BcProduct';
	var $table = 'products';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation',
			'shot_desctiption' => 'shortDescriptionTranslation',
			'desctiption' => 'descriptionTranslation'
		),
	);
	
	var $validation = array(
    	'sku' => array(
    		'skuRule-1' => array (
    			'rule'    => 'alphaNumericDash', 
        	    'message' => 'Only letters, numbers or dashes.',
    		)
    	),
    	'amount' => array(
			'amountRule-1' => array(
				'rule' => 'notNegativeInteger',
				'message' => 'Amount must be positive whole number or 0.'
			)
		),
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
		'Product' => array(
			'className'		=> 'Product',
			'foreignKey'	=> 'product_id'
		),
		'ProductType' => array(
			'className'		=> 'ProductType',
			'foreignKey'	=> 'product_type_id'
		),
		'Price' => array(
			'className'		=> 'Price',
			'foreignKey'	=> 'price_id'
		),
		'ProductState' => array(
			'className'		=> 'ProductState',
			'foreignKey'	=> 'product_state_id'
		),
		'ImageGallery' => array(
			'className'		=> 'ImageGallery',
			'foreignKey'	=> 'image_gallery_id'
		),
	);
	
	var $hasMany = array(
		'Related' => array(
			'className'		=> 'Related',
			'foreignKey'	=> 'Related.product_id'
		),
		'RelatedTo' => array(
			'className'		=> 'Related',
			'foreignKey'	=> 'Related.related_to_id'
		),
		'AttributeProduct' => array(
			'className'		=> 'AttributeProduct',
			'foreignKey'	=> 'AttributeProduct.product_id'
		),
		'ProductShippingMethod' => array(
			'className'		=> 'ProductShippingMethod',
			'foreignKey'	=> 'ProductShippingMethod.product_id'
		),
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