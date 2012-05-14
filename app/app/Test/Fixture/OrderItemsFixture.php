<?php

class OrderItemsFixture extends CakeTestFixture {

	public $name = 'OrderItems';

	public $import = 'OrderItems';
    public $records = array(
    	//customer1 order 1
        array(
        	'id' => 1, 
        	'order_id' => '1',
        	'product_id' => '1',
        	'product_revision' => '1',
        	'amount' => '100',
        	'price_per_item' => '1.19',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        array(
        	'id' => 2, 
        	'order_id' => '1',
        	'product_id' => '2',
        	'product_revision' => '1',
        	'amount' => '50',
        	'price_per_item' => '0.99',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 order 2
        array(
        	'id' => 3, 
        	'order_id' => '2',
        	'product_id' => '1',
        	'product_revision' => '1',
        	'amount' => '100',
        	'price_per_item' => '1.19',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 order 3
        array(
        	'id' => 4, 
        	'order_id' => '3',
        	'product_id' => '1',
        	'product_revision' => '1',
        	'amount' => '100',
        	'price_per_item' => '1.19',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 order 4
        array(
        	'id' => 5, 
        	'order_id' => '4',
        	'product_id' => '1',
        	'product_revision' => '1',
        	'amount' => '100',
        	'price_per_item' => '1.19',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 company order 1
        array(
        	'id' => 6, 
        	'order_id' => '5',
        	'product_id' => '1',
        	'product_revision' => '1',
        	'amount' => '100',
        	'price_per_item' => '1.19',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        )
	);
}