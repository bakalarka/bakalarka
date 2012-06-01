<?php
App::uses('Currency', 'Model');

class CurrencyTest extends CakeTestCase {
    public $fixtures = array();

    public function setUp() {
        parent::setUp();
        $this->Currency = ClassRegistry::init('Currency');
    }
}