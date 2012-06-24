<?php
App::uses('Product', 'Model');
App::uses('AppModel', 'Model');

class ProductTest extends CakeTestCase {
    public $fixtures = array(
    	'app.attribute',
    	'app.attribute_product',
    	'app.category',
    	'app.category_product',
    	'app.currency',
    	'app.price',
    	'app.price_value',
    	'app.product',
    	'app.image_gallery',
    	'app.image',
    	'app.shipping_method',
    	'app.product_shipping_method',
    	'app.tag',
    	'app.product_tag',
    	
    );

    public function setUp() {
        parent::setUp();
        $this->Product = ClassRegistry::init('Product');
    }
    
	/**
	 * tearDown method
	 * 
	 * @return void
	 */
	public function tearDown() {
		parent::tearDown();
		unset($this->Product->request, $this->Product);
	}
	
	/**
	 * Test create product
	 */
	public function testCreateProduct() {
		
		$expected = array(
			'Product' => array(
				'name' => 'New product',
				'slug' => 'New product',
				'amount' => 0,
				'revision' => 0,
				'hidden' => 1,
				'deleted' => 0,
			),
			'ImageGallery' => array(
				'Default' => array()
			),
			'Price' => array(
				'PriceValue' => array(
					0 => array(
						'value' => 0,
						'currency_id' => 1
					)
				)
			)
		);
		
		$productCreated = $this->Product->createNew();
		$product = $this->Product->adminDetail($this->Product->getLastInsertID());
		
		$this->assertTrue((bool) $productCreated);
		$this->assertEqual($product['Product']['name'], $expected['Product']['name']);
		$this->assertEqual($product['Product']['slug'], $expected['Product']['slug']);
		$this->assertEqual($product['Product']['amount'], $expected['Product']['amount']);
		$this->assertEqual($product['Product']['revision'], $expected['Product']['revision']);
		$this->assertEqual($product['Product']['hidden'], $expected['Product']['hidden']);
		$this->assertEqual($product['Product']['deleted'], $expected['Product']['deleted']);
		$this->assertEqual($product['ImageGallery']['Default'], $expected['ImageGallery']['Default'], 'ImageGallery');
		$this->assertEqual($product['Price']['PriceValue'][0]['value'], $expected['Price']['PriceValue'][0]['value']);
		$this->assertEqual($product['Price']['PriceValue'][0]['currency_id'], $expected['Price']['PriceValue'][0]['currency_id']);
		
	}
	
	/**
	 * Test product detail (by slug)
	 */
	public function testDetailBySlug() {
		
		$expected = array(
			'Product' =>  array(
	        	'id' => 1, 
	        	'sku' => 'SKU001', 
	        	'name' => 'Kofola original', 
	        	'slug' => 'kofola-original', 
	        	'short_description' => 'Kofola is a carbonated soft drink produced in the Czech Republic and Slovakia. It is the principal rival of Coca-Cola and Pepsi in these two markets.',
	        	'description' => 'Kofola originated in the Czechoslovak pharmaceutical company Galena n.p. (located in Opava) in 1959 during research targeted at finding a possible use for surplus caffeine produced in the process of coffee roasting. The resulting dark-coloured, sweet-and-sour syrup Kofo became the main ingredient of a new soft drink named Kofola introduced in 1962.', 
	        	'image_gallery_id' => '1', 
	        	'amount' => '100', 
	        	'price_id' => '2', 
	        	'revision' => '1', 
	        	'hidden' => '0',
	        	'deleted' => '0',
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00'
	        ),
	        'Price' => array(
	        	'id' => 2, 
	        	'default_id' => '2', 
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00',
	        	'Default' => array(
		        	'id' => 2, 
		        	'price_id' => '2', 
		        	'value' => '1.19',
		        	'currency_id' => '1',
		        	'created' => '2012-05-10 11:00:00', 
		        	'modified' => '2012-05-10 11:00:00',	
	        		'Currency' => array(
	        			'name' => 'Euro',
						'abbreviation' => 'Eur',
						'symbol' => '&eur;'
	        		)
		        ),
		        'PriceValue' => array(
		        	0 => array(
			        	'id' => 2, 
			        	'price_id' => '2', 
			        	'value' => '1.19',
			        	'currency_id' => '1',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00',
		        		'Currency' => array(
		        			'name' => 'Euro',
							'abbreviation' => 'Eur',
							'symbol' => '&eur;'
		        		)
			        )
		        )
	        ),
	        'ImageGallery' => array(
	        	'id' => 1, 
	        	'default_id' => '1',
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00',
	        	'Default' => array(
		        	'id' => 1, 
		        	'image_gallery_id' => '1',
		        	'small' => '1edf82c214f4fcbc5dfd45206976994b87a786d8.jpg',
		        	'normal' => '9b65b0f4a408b141df8deaafbc52a54a9b137167.jpg', 
		        	'large' => '22ec9517ee8413435c94bbc0c678598705d67b5f.jpg',
		        	'original' => '2f3562f8652a52ffbaebe694d0be84e47f99c034.jpg',
		        	'created' => '2012-05-10 11:00:00', 
		        	'modified' => '2012-05-10 11:00:00'
		        ),
		        'Image' => array(
		        	0 => array(
			        	'id' => 1, 
			        	'image_gallery_id' => '1',
			        	'small' => '1edf82c214f4fcbc5dfd45206976994b87a786d8.jpg',
			        	'normal' => '9b65b0f4a408b141df8deaafbc52a54a9b137167.jpg', 
			        	'large' => '22ec9517ee8413435c94bbc0c678598705d67b5f.jpg',
			        	'original' => '2f3562f8652a52ffbaebe694d0be84e47f99c034.jpg',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        ),
			        1 => array(
			        	'id' => 2, 
			        	'image_gallery_id' => '1',
			        	'small' => '53fd115256c0157a1ea145d80fd86b2e7d3e9c2c.jpg',
			        	'normal' => '06491c8db65573e59bd6a2bbf5623c643b315fc2.jpg', 
			        	'large' => '4527aec326ee3011c4f6369adec92bb8cfa2ea7a.jpg',
			        	'original' => '08d4e4b33d58ac1786e1c31464d10888a949c226.jpg',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        ),
			        2 => array(
			        	'id' => 3, 
			        	'image_gallery_id' => '1',
			        	'small' => '9717426149031568abac25ac7052403b5002d7a8.jpg',
			        	'normal' => '5ca7e47e8f936a1781c1e29e7a46936750410c16.jpg', 
			        	'large' => '0ef50b23ed973cf96c990d4326f04f5c759c5a8f.jpg',
			        	'original' => 'd2a72c7ba084494e13fe2a2625d169ed32ba7265.jpg',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		        )
	        ),
	        'AttributeProduct' => array(
	        	0 => array(
		        	'id' => 1, 
		        	'attribute_id' => '2',
		        	'product_id' => '1',
		        	'value' => '2', 
		        	'Attribute' => array(
			        	'id' => 2, 
			        	'name' => 'Volume', 
			        	'units' => 'l',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		        ),
		        1 => array(
		        	'id' => 2, 
		        	'attribute_id' => '3',
		        	'product_id' => '1',
		        	'value' => 'Kofola a.s.',
		        	'Attribute' => array(
			        	'id' => 3, 
			        	'name' => 'Vendor', 
			        	'units' => '',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		        )
		    ),
		    'ProductShippingMethod' => array(
		    	0 => array(
		        	'id' => 1, 
		        	'product_id' => '1',
		        	'shipping_method_id' => '1',
		        	'ratio' => '10',
		        	'created' => '2012-05-10 11:00:00', 
					'modified' => '2012-05-10 11:00:00',
		    		'ShippingMethod' => array('id' => 1, 'name' => 'Delivery', 'price_id' => '1', 'active' => 1)
		        )
		    ),
		    'Category' => array(
		    	0 =>  array(
		        	'id' => 2, 
		        	'parent_id' => '1', 
		        	'name' => 'Soft drinks', 
		        	'slug' => 'soft-drinks',
		        	'created' => '2012-05-10 11:00:00', 
		        	'modified' => '2012-05-10 11:00:00',
		    		'Parent' => array(
			        	'id' => 1, 
			        	'parent_id' => '0', 
			        	'name' => 'Beverages', 
			        	'slug' => 'beverages',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		    	)
		    )
		);
		
		$product = $this->Product->detailBySlug('kofola-original');
		
		unset($product['Product']['product_type_id']);
		unset($product['ImageGallery']['nameTranslation']);
		unset($product['ImageGallery']['Default']['ImageGallery']);
		unset($product['AttributeProduct'][0]['Product']);
		unset($product['AttributeProduct'][1]['Product']);
		unset($product['ProductShippingMethod'][0]['Product']);
		unset($product['Category'][0]['product_type_id']);
		unset($product['Category'][0]['Parent']['product_type_id']);
		unset($product['Category'][0]['CategoriesProduct']);
		unset($product['Category'][0]['nameTranslation']);
		unset($product['Category'][0]['slugTranslation']);
		
		$this->assertEqual($product['Product'], $expected['Product'], 'Product');
		$this->assertEqual($product['ImageGallery']['Default'], $expected['ImageGallery']['Default'], 'ImageGallery Default');
		$this->assertEqual($product['ImageGallery']['Image'], $expected['ImageGallery']['Image'], 'ImageGallery Image');
		$this->assertEqual($product['ImageGallery'], $expected['ImageGallery'], 'ImageGallery');
		$this->assertEqual($product['Price']['Default'], $expected['Price']['Default'], 'Price Default');
		$this->assertEqual($product['Price']['PriceValue'], $expected['Price']['PriceValue'], 'Price Value');
		$this->assertEqual($product['Price'], $expected['Price'], 'Price');
		$this->assertEqual($product['AttributeProduct'], $expected['AttributeProduct'], 'AttributeProduct');
		$this->assertEqual($product['ProductShippingMethod'], $expected['ProductShippingMethod'], 'ProductShippingMethod');
		$this->assertEqual($product['Category'][0]['Parent'], $expected['Category'][0]['Parent'], 'Category parent');
		$this->assertEqual($product['Category'], $expected['Category'], 'Category');
	}
	
	/**
	 * Test get detail product (by ID)
	 */
	public function testDetail() {
	
		$expected = array(
			'Product' =>  array(
	        	'id' => 1, 
	        	'sku' => 'SKU001', 
	        	'name' => 'Kofola original', 
	        	'slug' => 'kofola-original', 
	        	'short_description' => 'Kofola is a carbonated soft drink produced in the Czech Republic and Slovakia. It is the principal rival of Coca-Cola and Pepsi in these two markets.',
	        	'description' => 'Kofola originated in the Czechoslovak pharmaceutical company Galena n.p. (located in Opava) in 1959 during research targeted at finding a possible use for surplus caffeine produced in the process of coffee roasting. The resulting dark-coloured, sweet-and-sour syrup Kofo became the main ingredient of a new soft drink named Kofola introduced in 1962.', 
	        	'image_gallery_id' => '1', 
	        	'amount' => '100', 
	        	'price_id' => '2', 
	        	'revision' => '1', 
	        	'hidden' => '0',
	        	'deleted' => '0',
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00'
	        ),
	        'Price' => array(
	        	'id' => 2, 
	        	'default_id' => '2', 
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00',
	        	'Default' => array(
		        	'id' => 2, 
		        	'price_id' => '2', 
		        	'value' => '1.19',
		        	'currency_id' => '1',
		        	'created' => '2012-05-10 11:00:00', 
		        	'modified' => '2012-05-10 11:00:00',	
	        		'Currency' => array(
	        			'name' => 'Euro',
						'abbreviation' => 'Eur',
						'symbol' => '&eur;'
	        		)
		        ),
		        'PriceValue' => array(
		        	0 => array(
			        	'id' => 2, 
			        	'price_id' => '2', 
			        	'value' => '1.19',
			        	'currency_id' => '1',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00',
		        		'Currency' => array(
		        			'name' => 'Euro',
							'abbreviation' => 'Eur',
							'symbol' => '&eur;'
		        		)
			        )
		        )
	        ),
	        'ImageGallery' => array(
	        	'id' => 1, 
	        	'default_id' => '1',
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00',
	        	'Default' => array(
		        	'id' => 1, 
		        	'image_gallery_id' => '1',
		        	'small' => '1edf82c214f4fcbc5dfd45206976994b87a786d8.jpg',
		        	'normal' => '9b65b0f4a408b141df8deaafbc52a54a9b137167.jpg', 
		        	'large' => '22ec9517ee8413435c94bbc0c678598705d67b5f.jpg',
		        	'original' => '2f3562f8652a52ffbaebe694d0be84e47f99c034.jpg',
		        	'created' => '2012-05-10 11:00:00', 
		        	'modified' => '2012-05-10 11:00:00'
		        ),
		        'Image' => array(
		        	0 => array(
			        	'id' => 1, 
			        	'image_gallery_id' => '1',
			        	'small' => '1edf82c214f4fcbc5dfd45206976994b87a786d8.jpg',
			        	'normal' => '9b65b0f4a408b141df8deaafbc52a54a9b137167.jpg', 
			        	'large' => '22ec9517ee8413435c94bbc0c678598705d67b5f.jpg',
			        	'original' => '2f3562f8652a52ffbaebe694d0be84e47f99c034.jpg',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        ),
			        1 => array(
			        	'id' => 2, 
			        	'image_gallery_id' => '1',
			        	'small' => '53fd115256c0157a1ea145d80fd86b2e7d3e9c2c.jpg',
			        	'normal' => '06491c8db65573e59bd6a2bbf5623c643b315fc2.jpg', 
			        	'large' => '4527aec326ee3011c4f6369adec92bb8cfa2ea7a.jpg',
			        	'original' => '08d4e4b33d58ac1786e1c31464d10888a949c226.jpg',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        ),
			        2 => array(
			        	'id' => 3, 
			        	'image_gallery_id' => '1',
			        	'small' => '9717426149031568abac25ac7052403b5002d7a8.jpg',
			        	'normal' => '5ca7e47e8f936a1781c1e29e7a46936750410c16.jpg', 
			        	'large' => '0ef50b23ed973cf96c990d4326f04f5c759c5a8f.jpg',
			        	'original' => 'd2a72c7ba084494e13fe2a2625d169ed32ba7265.jpg',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		        )
	        ),
	        'AttributeProduct' => array(
	        	0 => array(
		        	'id' => 1, 
		        	'attribute_id' => '2',
		        	'product_id' => '1',
		        	'value' => '2', 
		        	'Attribute' => array(
			        	'id' => 2, 
			        	'name' => 'Volume', 
			        	'units' => 'l',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		        ),
		        1 => array(
		        	'id' => 2, 
		        	'attribute_id' => '3',
		        	'product_id' => '1',
		        	'value' => 'Kofola a.s.',
		        	'Attribute' => array(
			        	'id' => 3, 
			        	'name' => 'Vendor', 
			        	'units' => '',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		        )
		    ),
		    'ProductShippingMethod' => array(
		    	0 => array(
		        	'id' => 1, 
		        	'product_id' => '1',
		        	'shipping_method_id' => '1',
		        	'ratio' => '10',
		        	'created' => '2012-05-10 11:00:00', 
					'modified' => '2012-05-10 11:00:00',
		    		'ShippingMethod' => array('id' => 1, 'name' => 'Delivery', 'price_id' => '1', 'active' => 1)
		        )
		    ),
		    'Category' => array(
		    	0 =>  array(
		        	'id' => 2, 
		        	'parent_id' => '1', 
		        	'name' => 'Soft drinks', 
		        	'slug' => 'soft-drinks',
		        	'created' => '2012-05-10 11:00:00', 
		        	'modified' => '2012-05-10 11:00:00',
		    		'Parent' => array(
			        	'id' => 1, 
			        	'parent_id' => '0', 
			        	'name' => 'Beverages', 
			        	'slug' => 'beverages',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		    	)
		    )
		);
		
		$product = $this->Product->detail(1);
		
		unset($product['Product']['product_type_id']);
		unset($product['ImageGallery']['nameTranslation']);
		unset($product['ImageGallery']['Default']['ImageGallery']);
		unset($product['AttributeProduct'][0]['Product']);
		unset($product['AttributeProduct'][1]['Product']);
		unset($product['ProductShippingMethod'][0]['Product']);
		unset($product['Category'][0]['product_type_id']);
		unset($product['Category'][0]['Parent']['product_type_id']);
		unset($product['Category'][0]['CategoriesProduct']);
		unset($product['Category'][0]['nameTranslation']);
		unset($product['Category'][0]['slugTranslation']);
		
		$this->assertEqual($product['Product'], $expected['Product'], 'Product');
		$this->assertEqual($product['ImageGallery']['Default'], $expected['ImageGallery']['Default'], 'ImageGallery Default');
		$this->assertEqual($product['ImageGallery']['Image'], $expected['ImageGallery']['Image'], 'ImageGallery Image');
		$this->assertEqual($product['ImageGallery'], $expected['ImageGallery'], 'ImageGallery');
		$this->assertEqual($product['Price']['Default'], $expected['Price']['Default'], 'Price Default');
		$this->assertEqual($product['Price']['PriceValue'], $expected['Price']['PriceValue'], 'Price Value');
		$this->assertEqual($product['Price'], $expected['Price'], 'Price');
		$this->assertEqual($product['AttributeProduct'], $expected['AttributeProduct'], 'AttributeProduct');
		$this->assertEqual($product['ProductShippingMethod'], $expected['ProductShippingMethod'], 'ProductShippingMethod');
		$this->assertEqual($product['Category'][0]['Parent'], $expected['Category'][0]['Parent'], 'Category parent');
		$this->assertEqual($product['Category'], $expected['Category'], 'Category');
		
	
	}
	
	/**
	 * Test get admin detail of product 
	 */
	public function testAdminDetail() {
	
		$expected = array(
			'Product' =>  array(
	        	'id' => 1, 
	        	'sku' => 'SKU001', 
	        	'name' => 'Kofola original', 
	        	'slug' => 'kofola-original', 
	        	'short_description' => 'Kofola is a carbonated soft drink produced in the Czech Republic and Slovakia. It is the principal rival of Coca-Cola and Pepsi in these two markets.',
	        	'description' => 'Kofola originated in the Czechoslovak pharmaceutical company Galena n.p. (located in Opava) in 1959 during research targeted at finding a possible use for surplus caffeine produced in the process of coffee roasting. The resulting dark-coloured, sweet-and-sour syrup Kofo became the main ingredient of a new soft drink named Kofola introduced in 1962.', 
	        	'image_gallery_id' => '1', 
	        	'amount' => '100', 
	        	'price_id' => '2', 
	        	'revision' => '1', 
	        	'hidden' => '0',
	        	'deleted' => '0',
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00'
	        ),
	        'Price' => array(
	        	'id' => 2, 
	        	'default_id' => '2', 
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00',
	        	'Default' => array(
		        	'id' => 2, 
		        	'price_id' => '2', 
		        	'value' => '1.19',
		        	'currency_id' => '1',
		        	'created' => '2012-05-10 11:00:00', 
		        	'modified' => '2012-05-10 11:00:00',	
	        		'Currency' => array(
	        			'name' => 'Euro',
						'abbreviation' => 'Eur',
						'symbol' => '&eur;'
	        		)
		        ),
		        'PriceValue' => array(
		        	0 => array(
			        	'id' => 2, 
			        	'price_id' => '2', 
			        	'value' => '1.19',
			        	'currency_id' => '1',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00',
		        		'Currency' => array(
		        			'name' => 'Euro',
							'abbreviation' => 'Eur',
							'symbol' => '&eur;'
		        		)
			        )
		        )
	        ),
	        'ImageGallery' => array(
	        	'id' => 1, 
	        	'default_id' => '1',
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00',
	        	'Default' => array(
		        	'id' => 1, 
		        	'image_gallery_id' => '1',
		        	'small' => '1edf82c214f4fcbc5dfd45206976994b87a786d8.jpg',
		        	'normal' => '9b65b0f4a408b141df8deaafbc52a54a9b137167.jpg', 
		        	'large' => '22ec9517ee8413435c94bbc0c678598705d67b5f.jpg',
		        	'original' => '2f3562f8652a52ffbaebe694d0be84e47f99c034.jpg',
		        	'created' => '2012-05-10 11:00:00', 
		        	'modified' => '2012-05-10 11:00:00'
		        ),
		        'Image' => array(
		        	0 => array(
			        	'id' => 1, 
			        	'image_gallery_id' => '1',
			        	'small' => '1edf82c214f4fcbc5dfd45206976994b87a786d8.jpg',
			        	'normal' => '9b65b0f4a408b141df8deaafbc52a54a9b137167.jpg', 
			        	'large' => '22ec9517ee8413435c94bbc0c678598705d67b5f.jpg',
			        	'original' => '2f3562f8652a52ffbaebe694d0be84e47f99c034.jpg',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        ),
			        1 => array(
			        	'id' => 2, 
			        	'image_gallery_id' => '1',
			        	'small' => '53fd115256c0157a1ea145d80fd86b2e7d3e9c2c.jpg',
			        	'normal' => '06491c8db65573e59bd6a2bbf5623c643b315fc2.jpg', 
			        	'large' => '4527aec326ee3011c4f6369adec92bb8cfa2ea7a.jpg',
			        	'original' => '08d4e4b33d58ac1786e1c31464d10888a949c226.jpg',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        ),
			        2 => array(
			        	'id' => 3, 
			        	'image_gallery_id' => '1',
			        	'small' => '9717426149031568abac25ac7052403b5002d7a8.jpg',
			        	'normal' => '5ca7e47e8f936a1781c1e29e7a46936750410c16.jpg', 
			        	'large' => '0ef50b23ed973cf96c990d4326f04f5c759c5a8f.jpg',
			        	'original' => 'd2a72c7ba084494e13fe2a2625d169ed32ba7265.jpg',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		        )
	        ),
	        'AttributeProduct' => array(
	        	0 => array(
		        	'id' => 1, 
		        	'attribute_id' => '2',
		        	'product_id' => '1',
		        	'value' => '2', 
		        	'Attribute' => array(
			        	'id' => 2, 
			        	'name' => 'Volume', 
			        	'units' => 'l',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		        ),
		        1 => array(
		        	'id' => 2, 
		        	'attribute_id' => '3',
		        	'product_id' => '1',
		        	'value' => 'Kofola a.s.',
		        	'Attribute' => array(
			        	'id' => 3, 
			        	'name' => 'Vendor', 
			        	'units' => '',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		        )
		    ),
		    'ProductShippingMethod' => array(
		    	0 => array(
		        	'id' => 1, 
		        	'product_id' => '1',
		        	'shipping_method_id' => '1',
		        	'ratio' => '10',
		        	'created' => '2012-05-10 11:00:00', 
					'modified' => '2012-05-10 11:00:00',
		    		'ShippingMethod' => array('id' => 1, 'name' => 'Delivery', 'price_id' => '1', 'active' => 1)
		        )
		    ),
		    'Category' => array(
		    	0 =>  array(
		        	'id' => 2, 
		        	'parent_id' => '1', 
		        	'name' => 'Soft drinks', 
		        	'slug' => 'soft-drinks',
		        	'created' => '2012-05-10 11:00:00', 
		        	'modified' => '2012-05-10 11:00:00',
		    		'Parent' => array(
			        	'id' => 1, 
			        	'parent_id' => '0', 
			        	'name' => 'Beverages', 
			        	'slug' => 'beverages',
			        	'created' => '2012-05-10 11:00:00', 
			        	'modified' => '2012-05-10 11:00:00'
			        )
		    	)
		    )
		);
		
		$product = $this->Product->adminDetail(1);
		
		unset($product['Product']['product_type_id']);
		unset($product['ImageGallery']['nameTranslation']);
		unset($product['ImageGallery']['Default']['ImageGallery']);
		unset($product['AttributeProduct'][0]['Product']);
		unset($product['AttributeProduct'][1]['Product']);
		unset($product['ProductShippingMethod'][0]['Product']);
		unset($product['Category'][0]['product_type_id']);
		unset($product['Category'][0]['Parent']['product_type_id']);
		unset($product['Category'][0]['CategoriesProduct']);
		unset($product['Category'][0]['nameTranslation']);
		unset($product['Category'][0]['slugTranslation']);
		
		$this->assertEqual($product['Product'], $expected['Product'], 'Product');
		$this->assertEqual($product['ImageGallery']['Default'], $expected['ImageGallery']['Default'], 'ImageGallery Default');
		$this->assertEqual($product['ImageGallery']['Image'], $expected['ImageGallery']['Image'], 'ImageGallery Image');
		$this->assertEqual($product['ImageGallery'], $expected['ImageGallery'], 'ImageGallery');
		$this->assertEqual($product['Price']['Default'], $expected['Price']['Default'], 'Price Default');
		$this->assertEqual($product['Price']['PriceValue'], $expected['Price']['PriceValue'], 'Price Value');
		$this->assertEqual($product['Price'], $expected['Price'], 'Price');
		$this->assertEqual($product['AttributeProduct'], $expected['AttributeProduct'], 'AttributeProduct');
		$this->assertEqual($product['ProductShippingMethod'], $expected['ProductShippingMethod'], 'ProductShippingMethod');
		$this->assertEqual($product['Category'][0]['Parent'], $expected['Category'][0]['Parent'], 'Category parent');
		$this->assertEqual($product['Category'], $expected['Category'], 'Category');
		
	}
	
	/**
	 * Test hidden detail
	 */
	public function testDetailHidden() {
	
		$this->assertFalse($this->Product->detailBySlug('horalky2'), 'Hidden by slug');
		$this->assertFalse($this->Product->detail('horalky2'), 'Hidden by ID');
		
	}

	/**
	 * Test DELETED detail
	 */
	public function testDetaildELETED() {
	
		$this->assertFalse($this->Product->detailBySlug('horalky3'), 'Deleted by slug');
		$this->assertFalse($this->Product->detail('horalky3'), 'Deleted by ID');
	
	}
	
	/**
	 * Test edit product
	 */
	public function testEdit() {
	
		$data = array(
			'Product' =>  array(
	        	'id' => 1, 
	        	'sku' => 'SKU001XXX', 
	        	'name' => 'Kofola originalXXX', 
	        	'slug' => 'kofola-originalXXX', 
	        	'short_description' => 'XXX',
	        	'description' => 'XXX', 
	        	'image_gallery_id' => '2', 
	        	'amount' => '200', 
	        	'price_id' => '20', 
	        	'revision' => '2', 
	        	'hidden' => '1',
	        	'deleted' => '1'
	        )
		);
		
		$productEdit = $this->Product->edit($data);
		$product = $this->Product->detail(1);
		
		$this->assertEqual($product['Product']['sku'], 'SKU001XXX', 'SKU changed');
		$this->assertEqual($product['Product']['name'], 'Kofola originalXXX', 'Name changed');
		$this->assertEqual($product['Product']['slug'], 'kofola-originalXXX', 'Slug changed');
		$this->assertEqual($product['Product']['short_description'], 'XXX', 'Short description changed');
		$this->assertEqual($product['Product']['description'], 'XXX', 'description changed');
		$this->assertEqual($product['Product']['image_gallery_id'], '1', 'Image gallery not changed');
		$this->assertEqual($product['Product']['amount'], '200', 'amount changed');
		$this->assertEqual($product['Product']['price_id'], '2', 'Price id not changed');
		$this->assertEqual($product['Product']['revision'], '2', 'Revision updated');
		$this->assertEqual($product['Product']['hidden'], '0', 'hidden note changed');
		$this->assertEqual($product['Product']['deleted'], '0', 'deleted not changed');
		
	}
	
	/**
	 * Test bad slug
	 */
	public function testEditBadSlug() {
		
		$data = array(
			'Product' =>  array(
	        	'id' => 1, 
	        	'slug' => 'kofola-citrus', 
	        )
		);
		
		$productEdit = $this->Product->edit($data);
		$this->assertFalse($productEdit, 'Bad slug');
		$product = $this->Product->detail(1);
		
		$this->assertEqual($product['Product']['slug'], 'kofola-original', 'Slug not changed');
		
	}
	
	/**
	 * Test hide product
	 */
	public function testHide() {
	
		$this->assertTrue((bool) $this->Product->hide(1), 'Hide product');
		$this->assertFalse($this->Product->detail(1));
		
	}
	
	/**
	 * Test show product
	 */
	public function testShow() {
	
		$this->assertTrue((bool) $this->Product->show(6), 'Show product');
		$this->assertTrue((bool) $this->Product->detail(6));
		
	}
	
	/**
	 * Test delete product
	 */
	public function testDelete() {
	
		$this->assertTrue((bool) $this->Product->softDelete(1), 'Delete product');
		$this->assertFalse($this->Product->detail(1));
		
	}
	
	/**
	 * Test add category
	 */
	public function testAddCategory() {
		
		$this->Product->addCategory(1, 5);
		$product = $this->Product->detail(1);
		
		$this->assertEqual($product['Category'][1]['name'], 'Snacks', 'Category added');
				
	}
	
	/**
	 * Test remove category
	 */
	public function testRemoveCategory() {
		
		$this->Product->removeCategory(1, 2);
		$product = $this->Product->detail(1);
		
		$this->assertEmpty($product['Category'], 'Category removed');
				
	}
	
	/**
	 * Test add attribute
	 */
	public function testAddAttribute() {

		$this->assertTrue((bool) $this->Product->addAttribute(1, 1, 2000));
		
		$product = $this->Product->detail(1);
		
		$this->assertEqual($product['AttributeProduct'][2]['value'], 2000, 'Value set');
		$this->assertEqual($product['AttributeProduct'][2]['Attribute']['name'], 'Weight', 'Attribute name ok');
	}
	
	/**
	 * Test edit attribute
	 */
	public function testEditAttribute() {
		
		$this->assertTrue((bool) $this->Product->editAttribute(1, 1.5));
		
		$product = $this->Product->detail(1);
		
		$this->assertEqual($product['AttributeProduct'][0]['value'], 1.5, 'Value set');
		
	}
	
	/**
	 * Test remove attribute
	 */
	public function testRemoveAttribute() {
		
		$this->assertTrue((bool) $this->Product->removeAttribute(1), 'Attribute removed');
		
		$product = $this->Product->detail(1);
		
		$this->assertEqual($product['AttributeProduct'][0]['Attribute']['id'], 3, 'Attribute name not the same');
	}
	
	/**
	 * Test add image
	 */
	public function testAddImage() {
		//
	}
	
}