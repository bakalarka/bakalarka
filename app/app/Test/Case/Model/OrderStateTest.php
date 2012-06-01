<?php
App::uses('OrderState', 'Model');

class OrderStateTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->OrderState = ClassRegistry::init('OrderState');
    }
}