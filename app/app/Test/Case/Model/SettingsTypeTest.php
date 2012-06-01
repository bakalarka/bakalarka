<?php
App::uses('SettingsType', 'Model');

class SettingsTypeTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->SettingsType = ClassRegistry::init('SettingsType');
    }
}