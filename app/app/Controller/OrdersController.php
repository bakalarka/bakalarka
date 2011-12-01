<?php 
class OrdersController extends AppController {	
	
	var $name 		= 'Orders';
	var $helpers 	= array('Html'); //TODO - helpers are in app_controller, not needed here
	var $uses 		= array(
		'Order'
	);
		
}
?>