<?php
App::uses('Category', 'Model');

class CategoryTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Category = ClassRegistry::init('Category');
    }
}