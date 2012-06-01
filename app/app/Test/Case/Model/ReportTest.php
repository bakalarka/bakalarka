<?php
App::uses('Report', 'Model');

class ReportTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Report = ClassRegistry::init('Report');
    }
}