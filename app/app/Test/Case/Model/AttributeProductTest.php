<?php
App::uses('AttributeProduct', 'Model');

class AttributeProductTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->AttributeProduct = ClassRegistry::init('AttributeProduct');
    }
}