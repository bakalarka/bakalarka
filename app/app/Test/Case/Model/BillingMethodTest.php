<?php
App::uses('BillingMethod', 'Model');

class BillingMethodTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->BillingMethod = ClassRegistry::init('BillingMethod');
    }
}