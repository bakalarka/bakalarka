<?php
App::uses('Invoice', 'Model');

class InvoiceTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Invoice = ClassRegistry::init('Invoice');
    }
}