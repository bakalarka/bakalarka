<?php
App::uses('ReportType', 'Model');

class ReportTypeTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->ReportType = ClassRegistry::init('ReportType');
    }
}