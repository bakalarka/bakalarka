<?php

class AttributeProductFixture extends CakeTestFixture {

	public $name = 'AttributeProduct';

	public $import = 'AttributeProduct';
    public $records = array(
    	//kofola original -> volume
        array(
        	'id' => 1, 
        	'attribute_id' => '2',
        	'product_id' => '1',
        	'value' => '2' 
        ),
        //kofola original -> vendor
        array(
        	'id' => 2, 
        	'attribute_id' => '3',
        	'product_id' => '1',
        	'value' => 'Kofola a.s.' 
        ),
        //kofola citrus -> volume
        array(
        	'id' => 3, 
        	'attribute_id' => '2',
        	'product_id' => '2',
        	'value' => '2' 
        ),
        //kofola citrus -> vendor
        array(
        	'id' => 4, 
        	'attribute_id' => '3',
        	'product_id' => '2',
        	'value' => 'Kofola a.s.' 
        ),
        //rajec salvia -> volume
        array(
        	'id' => 5, 
        	'attribute_id' => '2',
        	'product_id' => '3',
        	'value' => '1.5' 
        ),
        //rajec salvia -> vendor
        array(
        	'id' => 6, 
        	'attribute_id' => '3',
        	'product_id' => '3',
        	'value' => 'Kofola a.s.' 
        ),
        //horalky -> weight
        array(
        	'id' => 7, 
        	'attribute_id' => '1',
        	'product_id' => '4',
        	'value' => '50' 
        ),
        //horalky -> vendor
        array(
        	'id' => 8, 
        	'attribute_id' => '3',
        	'product_id' => '4',
        	'value' => 'Sedita' 
        )
    );
}