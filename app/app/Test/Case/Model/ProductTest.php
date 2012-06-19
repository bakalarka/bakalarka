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
		
		$productCreated = $this->Product->createNew();
		$product = $this->Product->read(null, $this->Product->getLastInsertID());
		//debug($product); ob_flush();
		$this->assertTrue((bool) $productCreated);
		//$this->assertEqual($result, $expected);
		
	}
	
	
}