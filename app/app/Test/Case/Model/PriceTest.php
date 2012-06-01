<?php
App::uses('Price', 'Model');

class PriceTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Price = ClassRegistry::init('Price');
    }
}