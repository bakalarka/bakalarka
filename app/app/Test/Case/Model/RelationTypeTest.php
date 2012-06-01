<?php
App::uses('RelationType', 'Model');

class RelationTypeTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->RelationType = ClassRegistry::init('RelationType');
    }
}