<?php
App::uses('OrderItem', 'Model');

class OrderItemTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->OrderItem = ClassRegistry::init('OrderItem');
    }
}