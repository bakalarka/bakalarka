<?php 
class BcCheckoutsController extends AppController {	
	
	//singular!
	var $name 		= 'Checkouts';
	var $uses 		= array();

	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	/** frontend **/
	
	/**
	 * index
	 * Checkout
	 */
	function index() {
		//
	}
	
	/**
	 * billing_shipping
	 * Biling and shipping choice 
	 */
	function billing_shipping_method() {
		//
	}
	
	/**
	 * billing_shipping_address
	 * Billing and shipping address
	 */
	function billing_shipping_address() {
		//
	}
	
	/**
	 * place_order
	 * Place order
	 */
	function place_order() {
		//
	}
	
}
?>