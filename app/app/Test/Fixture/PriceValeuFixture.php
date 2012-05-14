<?php

class PriceValueFixture extends CakeTestFixture {

	public $name = 'PriceValue';

	public $import = 'PriceValue';
    public $records = array(
    	//Shipping method
        array(
        	'id' => 1, 
        	'price_id' => '1', 
        	'value' => '2.50',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //kofola original
        array(
        	'id' => 2, 
        	'price_id' => '2', 
        	'value' => '1.19',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //kofola citrus
        array(
        	'id' => 3, 
        	'price_id' => '3', 
        	'value' => '0.99',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //rajec salvia
        array(
        	'id' => 4, 
        	'price_id' => '4', 
        	'value' => '0.69',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //horalky
        array(
        	'id' => 5, 
        	'price_id' => '5', 
        	'value' => '0.39',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //kofola original
        array(
        	'id' => 2, 
        	'default_id' => '2', 
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //kofola citrus
        array(
        	'id' => 3, 
        	'default_id' => '3', 
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //rajec salvia
        array(
        	'id' => 4, 
        	'default_id' => '4', 
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //horalky
        array(
        	'id' => 5, 
        	'default_id' => '5', 
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        )
    );
}