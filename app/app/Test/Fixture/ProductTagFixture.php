<?php

class ProductTagFixture extends CakeTestFixture {

	public $name = 'ProductTag';

	public $import = array('table' => 'product_tagss');
    public $records = array(
    	//kofola citrus -> new
        array(
        	'id' => 1, 
        	'product_id' => '2', 
        	'tag_id' => '1',
        ),
        //kofola citrus -> special offer
        array(
        	'id' => 2, 
        	'product_id' => '2', 
        	'tag_id' => '2',
        ),
        //horalky -> special offer
        array(
        	'id' => 1, 
        	'product_id' => '4', 
        	'tag_id' => '2',
        )
    );
}