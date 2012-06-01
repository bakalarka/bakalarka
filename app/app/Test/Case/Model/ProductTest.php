<?php
App::uses('Product', 'Model');

class ProductTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Product = ClassRegistry::init('Product');
    }
}