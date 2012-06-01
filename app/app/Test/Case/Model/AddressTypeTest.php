<?php
App::uses('AddressType', 'Model');

class AddressTypeTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->AddressType = ClassRegistry::init('AddressType');
    }
}