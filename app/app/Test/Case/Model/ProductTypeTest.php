<?php
App::uses('ProductType', 'Model');

class ProductTypeTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->ProductType = ClassRegistry::init('ProductType');
    }
}