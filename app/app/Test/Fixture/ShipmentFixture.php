<?php

class ShipmentFixture extends CakeTestFixture {

	public $name = 'Shipment';

	public $import = 'Shipment';
    public $records = array(
    	//customer1 created order
        array(
        	'id' => 1, 
        	'shipping_method_id' => '1',
			'order_id' => '1',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer1 processing order
        array(
        	'id' => 2, 
        	'shipping_method_id' => '1',
			'order_id' => '2',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer1 delivered order
        array(
        	'id' => 3, 
        	'shipping_method_id' => '1',
			'order_id' => '3',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer1 canceled order
        array(
        	'id' => 4, 
        	'shipping_method_id' => '1',
			'order_id' => '4',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
		//customer1 company order
	    array(
        	'id' => 5, 
        	'shipping_method_id' => '1',
			'order_id' => '5',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        )
	);
}