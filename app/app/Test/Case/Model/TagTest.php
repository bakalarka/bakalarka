<?php
App::uses('Tag', 'Model');

class TagTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Tag = ClassRegistry::init('Tag');
    }
}