<?php
App::uses('Order', 'Model');

class OrderTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Order = ClassRegistry::init('Order');
    }
}