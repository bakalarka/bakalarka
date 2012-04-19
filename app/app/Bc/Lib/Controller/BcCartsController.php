<?php 
class BcCartsController extends AppController {	
	
	var $name 		= 'Carts';
	var $uses 		= array(
		'Cart'
	);
	
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	/**
	 * index
	 * Show the cart
	 */
	function index() {
		//
	}
	
	/**
	 * add
	 * Add item(s) to cart
	 */
	function add() {
		//
	}
	
	/**
	 * update
	 * Update cart
	 */
	function update() {
		//
	}
	
	/**
	 * remove
	 * Remove item(s) from cart
	 */
	function remove() {
		//
	}
	
	/**
	 * empty_cart
	 * Empty cart
	 */
	function empty_cart() {
		//
	}
		
}
?>