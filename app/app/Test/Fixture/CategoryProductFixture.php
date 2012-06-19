<?php

class CategoryProductFixture extends CakeTestFixture {

	public $name = 'CategoriesProduct';

	public $import = array('table' => 'categories_products');
    public $records = array(
    	//kofola original -> soft drink
        array(
        	'id' => 1, 
        	'category_id' => '2',
        	'product_id' => '1', 
        ),
        //kofola citrus -> soft drink
        array(
        	'id' => 2, 
        	'category_id' => '2',
        	'product_id' => '2',
        ),
        //rajec salvia -> mineral water
        array(
        	'id' => 3, 
        	'category_id' => '3',
        	'product_id' => '3',
        ),
        //horalky -> snack
        array(
        	'id' => 4, 
        	'category_id' => '5',
        	'product_id' => '4',
        ),
        //horalky deleted -> snack
        array(
        	'id' => 5, 
        	'category_id' => '5',
        	'product_id' => '5',
        ),
        //horalky hidden -> snack
        array(
        	'id' => 6, 
        	'category_id' => '5',
        	'product_id' => '6',
        )
    );
}