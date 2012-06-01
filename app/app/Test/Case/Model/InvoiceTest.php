<?php
App::uses('InvoiceItem', 'Model');

class InvoiceItemTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->InvoiceItem = ClassRegistry::init('InvoiceItem');
    }
}