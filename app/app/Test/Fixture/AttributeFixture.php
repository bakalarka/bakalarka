<?php

class AttributeFixture extends CakeTestFixture {

	public $name = 'Attribute';

	public $import = 'Attribute';
    public $records = array(
        array(
        	'id' => 1, 
        	'name' => 'Weight', 
        	'units' => 'g',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        array(
        	'id' => 1, 
        	'name' => 'Volume', 
        	'units' => 'l',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        array(
        	'id' => 1, 
        	'name' => 'Vendor', 
        	'units' => '',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        )
    );
}