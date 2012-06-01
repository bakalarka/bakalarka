<?php
App::uses('Address', 'Model');

class AddressTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Address = ClassRegistry::init('Address');
    }
}