<?php
App::uses('Group', 'Model');

class GroupTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Group = ClassRegistry::init('Group');
    }
}