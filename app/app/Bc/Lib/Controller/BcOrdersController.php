<?php 
class BcOrdersController extends AppController {	
	
	var $name 		= 'Orders';
	var $uses 		= array(
		'Order'
	);
	
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
		
}
?>