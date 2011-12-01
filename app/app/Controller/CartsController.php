<?php 
class CartsController extends AppController {	
	
	var $name 		= 'Carts';
	var $helpers 	= array('Html'); //TODO - helpers are in app_controller, not needed here
	var $uses 		= array(
		'Cart'
	);
		
}
?>