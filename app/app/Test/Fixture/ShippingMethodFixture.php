<?php

class ShippingMethodFixture extends CakeTestFixture {
	public $name = 'ShippingMethod';
	public $import = 'ShippingMethod';
	
	public $records = array(
		array('id' => 1, 'name' => 'Delivery', 'price_id' => '1', 'active' => 1)
	);
}