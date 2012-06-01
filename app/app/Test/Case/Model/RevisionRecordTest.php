<?php
App::uses('RevisionRecord', 'Model');

class RevisionRecordTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->RevisionRecord = ClassRegistry::init('RevisionRecord');
    }
}