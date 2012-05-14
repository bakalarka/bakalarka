<?php

class RelatedFixture extends CakeTestFixture {

	public $name = 'Related';

	public $import = 'Related';
    public $records = array(
    	//kofola original <-> kofola citrus
        array(
        	'id' => 1, 
        	'product_id' => '1',
        	'related_to_id' => '2',
        	'relation_type_id' => '1' 
        ),
        //kofola citrus <-> kofola original
        array(
        	'id' => 2, 
        	'product_id' => '2',
        	'related_to_id' => '1',
        	'relation_type_id' => '1' 
        )
    );
}