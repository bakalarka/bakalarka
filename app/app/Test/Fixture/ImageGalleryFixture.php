<?php

class ImageGalleryFixture extends CakeTestFixture {

	public $name = 'ImageGallery';

	public $import = 'ImageGallery';
    public $records = array(
    	//Kofola original
        array(
        	'id' => 1, 
        	'default_id' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //Kofola citrus
        array(
        	'id' => 2, 
        	'default_id' => '4',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //rajec salvia
        array(
        	'id' => 3, 
        	'default_id' => '7',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //horalky
        array(
        	'id' => 4, 
        	'default_id' => '10',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        )
    );
}