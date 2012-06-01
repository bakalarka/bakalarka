<?php
App::uses('PriceValue', 'Model');

class PriceValueTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->PriceValue = ClassRegistry::init('PriceValue');
    }
}