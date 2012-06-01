<?php
App::uses('Shipment', 'Model');

class SettingsTypeTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Shipment = ClassRegistry::init('Shipment');
    }
}