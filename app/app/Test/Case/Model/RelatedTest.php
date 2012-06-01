<?php
App::uses('Related', 'Model');

class RelatedTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Related = ClassRegistry::init('Related');
    }
}