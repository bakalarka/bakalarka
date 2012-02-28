<?php
class BcProductRecord extends AppModel {
	var $name = 'BcProductRecord';
	var $table = 'product_records';
	
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
		'Name' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'name_id'
		),
		'ShortDescription' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'short_description_id'
		),
		'Description' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'description_id'
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
		)
	);
}
?>