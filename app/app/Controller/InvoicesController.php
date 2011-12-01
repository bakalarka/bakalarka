<?php 
class InvoicesController extends AppController {	
	
	var $name 		= 'Invoices';
	var $helpers 	= array('Html'); //TODO - helpers are in app_controller, not needed here
	var $uses 		= array(
		'Invoice'
	);
		
}
?>