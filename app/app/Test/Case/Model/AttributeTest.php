<?php
App::uses('Attribute', 'Model');

class AttributeTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Attribute = ClassRegistry::init('Attribute');
    }
}