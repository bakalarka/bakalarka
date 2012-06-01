<?php
App::uses('Language', 'Model');

class LanguageTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Language = ClassRegistry::init('Language');
    }
}