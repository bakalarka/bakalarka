<?php 
class ProductsController extends AppController {	
	
	var $name 		= 'Products';
	var $helpers 	= array('Html'); //TODO - helpers are in app_controller, not needed here
	var $uses 		= array(
		'Product'
	);
		
}
?>