<?php

class OrderFixture extends CakeTestFixture {

	public $name = 'Order';

	public $import = 'Order';
    public $records = array(
    	//customer1 created order
        array(
        	'id' => 1, 
        	'invoice_id' => '1',
			'name' => 'Kofola original',
			'amount' => '100',
			'price_per_unit' => '1.19',
			'price_total' => '119',
			'currency' => 'Eur',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        array(
        	'id' => 2, 
        	'invoice_id' => '1',
			'name' => 'Kofola citrus',
			'amount' => '50',
			'price_per_unit' => '0.99',
			'price_total' => '49.50',
			'currency' => 'Eur',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer1 processing order
        array(
        	'id' => 3, 
        	'invoice_id' => '2',
			'name' => 'Kofola original',
			'amount' => '100',
			'price_per_unit' => '1.19',
			'price_total' => '119',
			'currency' => 'Eur',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer1 delivered order
        array(
        	'id' => 4, 
        	'invoice_id' => '3',
			'name' => 'Kofola original',
			'amount' => '100',
			'price_per_unit' => '1.19',
			'price_total' => '119',
			'currency' => 'Eur',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer1 canceled order
       array(
        	'id' => 5, 
        	'invoice_id' => '4',
			'name' => 'Kofola original',
			'amount' => '100',
			'price_per_unit' => '1.19',
			'price_total' => '119',
			'currency' => 'Eur',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
		//customer1 company order
       array(
        	'id' => 6, 
        	'invoice_id' => '5',
			'name' => 'Kofola original',
			'amount' => '100',
			'price_per_unit' => '1.19',
			'price_total' => '119',
			'currency' => 'Eur',
			'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        )
	);
}