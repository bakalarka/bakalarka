<?php

class OrderFixture extends CakeTestFixture {

	public $name = 'Order';

	public $import = 'Order';
    public $records = array(
    	//customer1 created order
        array(
        	'id' => 1, 
        	'number' => '20120501',
			'invoice_id' => '1',
        	'user_id' => '5',
        	'company_id' => '',
        	'order_state_id' => '1',
        	'billing_address_id' => '2',
        	'shipping_address_id' => '3',
        	'billing_method_id' => '1',
        	'shipping_method_id' => '1',
        	'currency_id' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 processing order
        array(
        	'id' => 2, 
        	'number' => '20120502',
			'invoice_id' => '2',
        	'user_id' => '5',
        	'company_id' => '',
        	'order_state_id' => '2',
        	'billing_address_id' => '2',
        	'shipping_address_id' => '3',
        	'billing_method_id' => '1',
        	'shipping_method_id' => '1',
        	'currency_id' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 delivered order
        array(
        	'id' => 3, 
        	'number' => '20120502',
			'invoice_id' => '3',
        	'user_id' => '5',
        	'company_id' => '',
        	'order_state_id' => '3',
        	'billing_address_id' => '2',
        	'shipping_address_id' => '3',
        	'billing_method_id' => '1',
        	'shipping_method_id' => '1',
        	'currency_id' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 canceled order
        array(
        	'id' => 4, 
        	'number' => '20120504',
			'invoice_id' => '4',
        	'user_id' => '5',
        	'company_id' => '',
        	'order_state_id' => '4',
        	'billing_address_id' => '2',
        	'shipping_address_id' => '3',
        	'billing_method_id' => '1',
        	'shipping_method_id' => '1',
        	'currency_id' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
		//customer1 company order
        array(
        	'id' => 5, 
        	'number' => '20120501',
			'invoice_id' => '5',
        	'user_id' => '5',
        	'company_id' => '2',
        	'order_state_id' => '1',
        	'billing_address_id' => '2',
        	'shipping_address_id' => '3',
        	'billing_method_id' => '1',
        	'shipping_method_id' => '1',
        	'currency_id' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
	);
}