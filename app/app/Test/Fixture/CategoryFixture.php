<?php

class CategoryFixture extends CakeTestFixture {

	public $name = 'Category';

	public $import = 'Category';
    public $records = array(
        array(
        	'id' => 1, 
        	'parent_id' => '', 
        	'name' => 'Beverages', 
        	'slug' => 'beverages',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        array(
        	'id' => 2, 
        	'parent_id' => '1', 
        	'name' => 'Soft drinks', 
        	'slug' => 'soft-drinks',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        array(
        	'id' => 3, 
        	'parent_id' => '1', 
        	'name' => 'Mineral water', 
        	'slug' => 'mineral-water',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        array(
        	'id' => 4, 
        	'parent_id' => '', 
        	'name' => 'Food', 
        	'slug' => 'food',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        array(
        	'id' => 5, 
        	'parent_id' => '4', 
        	'name' => 'Snacks', 
        	'slug' => 'snacks',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        )
    );
}