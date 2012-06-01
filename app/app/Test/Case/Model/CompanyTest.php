<?php
App::uses('Company', 'Model');

class CompanyTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Company = ClassRegistry::init('Company');
    }
}