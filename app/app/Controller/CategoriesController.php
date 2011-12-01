<?php 
class CategoriesController extends AppController {	
	
	var $name 		= 'Categories';
	var $helpers 	= array('Html'); //TODO - helpers are in app_controller, not needed here
	var $uses 		= array(
		'Category'
	);
		
}
?>