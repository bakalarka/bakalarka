<?php
App::uses('ShippingMethod', 'Model');

class ShippingMethodTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->ShippingMethod = ClassRegistry::init('ShippingMethod');
    }
}