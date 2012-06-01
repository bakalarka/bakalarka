<?php
App::uses('ProductShippingMethod', 'Model');

class ProductShippingMethodTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->ProductShippingMethod = ClassRegistry::init('ProductShippingMethod');
    }
}