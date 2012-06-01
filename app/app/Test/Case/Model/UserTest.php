<?php
App::uses('User', 'Model');

class UserTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->User = ClassRegistry::init('User');
    }
}