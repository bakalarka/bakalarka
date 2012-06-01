<?php
App::uses('Settings', 'Model');

class SettingsTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Settings = ClassRegistry::init('Settings');
    }
}