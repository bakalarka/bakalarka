<?php
class BcProduct extends AppModel {
	var $name = 'Product';
	var $table = 'products';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation',
			'shot_desctiption' => 'shortDescriptionTranslation',
			'desctiption' => 'descriptionTranslation'
		),
	);
	
	public $validate = array(
    	'sku' => array(
    		'skuRule-1' => array (
    			'rule'    => 'alphaNumericDash', 
        	    'message' => 'Only letters, numbers or dashes.',
    		)
    	),
    	'slug' => array(
			'slugRule-1' => array(
				'rule' => 'isUnique',
				'message' => 'Slug must be unique.'
			)
		),
    	'amount' => array(
			'amountRule-1' => array(
				'rule' => 'notNegativeInteger',
				'message' => 'Amount must be positive whole number or 0.'
			)
		)
	);
	
	public $belongsTo = array(
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
			'foreignKey'	=> 'product_id'
		),
		'ProductShippingMethod' => array(
			'className'		=> 'ProductShippingMethod',
			'foreignKey'	=> 'product_id'
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Category',
		'Tag'
	);
	
	//fields allowed to be edited in edit action
	public $allowedToEdit = array(
		'sku', 
        'name', 
        'slug', 
        'short_description',
        'description',
        'amount'
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
	 * Get product detail
	 */
	public function detailBySlug($slug, $additionalConditions = array()) {
		//REFACTOR - same like detail by ID
		$conditions = array(
				'Product.slug' => $slug,
				'Product.hidden' => 0,
				'Product.deleted' => 0
			);
		$coditions = array_merge($conditions, $additionalConditions);
		$this->Behaviors->unload('Translate');
		$this->recursive = 2;
		$this->contain(
			array(
				'Price' => array(
					'Default' => array(
						'Currency' => array(
							'name',
							'abbreviation',
							'symbol'
						)
					),
					'PriceValue' => array(
						'Currency' => array(
							'name',
							'abbreviation',
							'symbol'
						)
					)
				),
				'ImageGallery' => array(
					'Default',
					'Image'
				),
				'AttributeProduct' => array(
					'Attribute'
				),
				'ProductShippingMethod' => array(
					'ShippingMethod'
				),
				'Category' => array(
					'Parent'
				),
				'Tag'
			)
		);
		return $this->find('first', array('conditions' => $conditions));
	}
	
	/**
	 * Get product detail
	 */
	public function detail($id, $additionalConditions = array()) {
		//REFACTOR - same like detail by slug
		$conditions = array(
				'Product.id' => $id,
				'Product.hidden' => 0,
				'Product.deleted' => 0
			);
		$coditions = array_merge($conditions, $additionalConditions);
		$this->Behaviors->unload('Translate');
		$this->recursive = 2;
		$this->contain(
			array(
				'Price' => array(
					'Default' => array(
						'Currency' => array(
							'name',
							'abbreviation',
							'symbol'
						)
					),
					'PriceValue' => array(
						'Currency' => array(
							'name',
							'abbreviation',
							'symbol'
						)
					)
				),
				'ImageGallery' => array(
					'Default',
					'Image'
				),
				'AttributeProduct' => array(
					'Attribute'
				),
				'ProductShippingMethod' => array(
					'ShippingMethod'
				),
				'Category' => array(
					'Parent'
				),
				'Tag'
			)
		);
		return $this->find('first', array('conditions' => $conditions));
	}
	
	/**
	 * Get product detail for admin
	 */
	public function adminDetail($id, $additionalConditions = array()) {
		//REFACTOR - same like detail by slug and by ID
		$conditions = array(
				'Product.id' => $id,
				'Product.deleted' => 0
			);
		$coditions = array_merge($conditions, $additionalConditions);
		$this->Behaviors->unload('Translate');
		$this->recursive = 2;
		$this->contain(
			array(
				'Price' => array(
					'Default' => array(
						'Currency' => array(
							'name',
							'abbreviation',
							'symbol'
						)
					),
					'PriceValue' => array(
						'Currency' => array(
							'name',
							'abbreviation',
							'symbol'
						)
					)
				),
				'ImageGallery' => array(
					'Default',
					'Image'
				),
				'AttributeProduct' => array(
					'Attribute'
				),
				'ProductShippingMethod' => array(
					'ShippingMethod'
				),
				'Category' => array(
					'Parent'
				),
				'Tag'
			)
		);
		return $this->find('first', array('conditions' => $conditions));
	}
	
	/**
	 * Edit product data
	 */
	public function edit($productData) {
		$this->Behaviors->unload('Translate');
		$this->recursive = -1;
		if (!isset($productData['Product']['id']))
			return false;
		$product = $this->read(null, $productData['Product']['id']);
		$updateRevision = false;
		foreach ($this->allowedToEdit as $fieldName) {
			if (isset($productData['Product'][$fieldName]))
				if ($product['Product'][$fieldName] != $productData['Product'][$fieldName]) {
					$updateRevision |= $this->createRevision($productData['Product']['id'], $fieldName, $product['Product'][$fieldName], $product['Product']['revision']);
					$product['Product'][$fieldName] = $productData['Product'][$fieldName];
				}
		}
		if ($updateRevision)
			$product['Product']['revision']++;

		return $this->save($product);
		
	}
	
	/**
	 * Hide product
	 */
	public function hide($id) {
		$data = array(
			'id' => $id,
			'hidden' => 1
		);
		return $this->save($data);
	}
	
	/**
	 * Show product
	 */
	public function show($id) {
		$data = array(
			'id' => $id,
			'hidden' => 0
		);
		return $this->save($data);
	}
	
	/**
	 * Soft delete
	 */
	public function softDelete($id) {
		$data = array(
			'id' => $id,
			'deleted' => 1
		);
		return $this->save($data);
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
		$data = array(
			'product_id' => $productId,
			'category_id' => $categoryId
		);
		return $this->CategoriesProduct->save($data);
	}
	
	/**
	 * Remove category
	 */
	public function removeCategory($productId, $categoryId) {
		$conditions = array(
			'product_id' => $productId,
			'category_id' => $categoryId
		);
		return $this->CategoriesProduct->deleteAll($conditions);
	}
	
	/**
	 * Add attribute
	 */
	public function addAttribute($productId, $attributeId, $attributeValue) {
		$data = array(
			'product_id' => $productId,
			'attribute_id' => $attributeId,
			'value' => $attributeValue
		);
		return $this->AttributeProduct->save($data);
	}
	
	/**
	 * Edit attribute
	 */
	public function editAttribute($id, $value) {
		$data = array(
			'id' => $id,
			'value' => $value
		);
		return $this->AttributeProduct->save($data);
	}
	
	/**
	 * Remove attribute
	 */
	public function removeAttribute($id) {
		return $this->AttributeProduct->delete($id);
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