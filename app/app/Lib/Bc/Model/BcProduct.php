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
		/** TEMP DISABLED
		 * 'ProductType' => array(
			'className'		=> 'ProductType',
			'foreignKey'	=> 'product_type_id'
		),*/
		'Price' => array(
			'className'		=> 'Price',
			'foreignKey'	=> 'price_id'
		),
		/** DEPRECATED
		'ProductState' => array(
			'className'		=> 'ProductState',
			'foreignKey'	=> 'product_state_id'
		),
		*/
		'ImageGallery' => array(
			'className'		=> 'ImageGallery',
			'foreignKey'	=> 'image_gallery_id'
		),
	);
	
	var $hasMany = array(
	/** TEMP DISABLED	
	'Related' => array(
			'className'		=> 'Related',
			'foreignKey'	=> 'Related.product_id'
		),
		'RelatedTo' => array(
			'className'		=> 'Related',
			'foreignKey'	=> 'Related.related_to_id'
		),*/
		'AttributeProduct' => array(
			'className'		=> 'AttributeProduct',
			'foreignKey'	=> 'AttributeProduct.product_id'
		),
		'ProductShippingMethod' => array(
			'className'		=> 'ProductShippingMethod',
			'foreignKey'	=> 'ProductShippingMethod.product_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Category',
		'Tag'
	);
	
	/**
	 * Create new product
	 */
	public function createNew() {
		$imageGallery = $this->ImageGallery->createNew();
		$price = $this->Price->createNew();
		if ($imageGallery && $price) {
			$data = array(
				'Product' => array(
					'name' => __('New product'),
					'slug' => $this->createSlug(__('New product')),
					'image_gallery_id' => $imageGallery,
					'amount' => 0,
					'price_id' => $price,
					'revision' => 0,
					'hidden' => 1,
					'deleted' => 0,
				)
			);
			if ($this->save($data))
				return $this->getLastInsertID();
		}
		return false;
	}
	
	/**
	 * Get product detail for admin
	 */
	public function adminDetail($id) {
		//
	}
	
	/**
	 * Edit product data
	 */
	public function edit($data) {
		//
	}
	
	/**
	 * Hide product
	 */
	public function hide($id) {
		//
	}
	
	/**
	 * Show product
	 */
	public function show($id) {
		//
	}
	
	/**
	 * Soft delete
	 */
	public function softDelete($id) {
		//
		
	}
	
	/**
	 * Add tag to product
	 */
	public function addTag($productId, $tagId) {
		//
	}
	
	/**
	 * Remove tag
	 */
	public function removeTag($productId, $tagId) {
		//
	}
	
	/**
	 * Add category
	 */
	public function addCategory($productId, $categoryId) {
		//
	}
	
	/**
	 * Remove category
	 */
	public function removeCategory($productId, $categoryId) {
		//
	}
	
	/**
	 * Add attribute
	 */
	public function addAttribute($productId, $attributeId, $attributeValue) {
		//
	}
	
	/**
	 * Edit attribute
	 */
	public function editAttribute($id, $value) {
		//
	}
	
	/**
	 * Remove attribute
	 */
	public function removeAttribute($id) {
		//
	}
	
	/**
	 * Add image
	 */
	public function addImage($data) {
		//
	}
	
	/**
	 * Remove immage
	 */
	public function removeImage($id) {
		//
	}
	
	/**
	 * Add shipping method
	 */
	public function addShippingMethod($productId, $shippingMethodId, $ratio) {
		//
	}
	
	/**
	 * Edit shipping method
	 */
	public function editShippingMethod($id, $ratio) {
		//
	}
	
	/**
	 * Remove shipping method
	 */
	public function removeShippingMethod($id) {
		//
	}
	
	/**
	 * Create slug
	 */
	public function createSlug($input) {
		//temp
		return $input;
	}
}
?>