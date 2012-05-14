<?php

class ProductShippingMethodFixture extends CakeTestFixture {

	public $name = 'ProductShippingMethod';

	public $import = 'ProductShippingMethod';
    public $records = array(
    	//kofola original
        array(
        	'id' => 1, 
        	'product_id' => '1',
        	'shipping_method_id' => '1',
        	'ratio' => '10' 
        ),
        //kofola citrus
        array(
        	'id' => 2, 
        	'product_id' => '2',
        	'shipping_method_id' => '1',
        	'ratio' => '10' 
        ),
        //rajec salvia
        array(
        	'id' => 3, 
        	'product_id' => '3',
        	'shipping_method_id' => '1',
        	'ratio' => '8' 
        ),
        //horalky
        array(
        	'id' => 4, 
        	'product_id' => '4',
        	'shipping_method_id' => '1',
        	'ratio' => '1' 
        )
    );
}