<?php

class TagFixture extends CakeTestFixture {
	public $name = 'Tag';
	public $import = 'Tag';
	
	 public $records = array(
        array(
        	'id' => 1, 
        	'name' => 'New', 
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        array(
        	'id' => 2, 
        	'name' => 'Special offer', 
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        )
      );
}