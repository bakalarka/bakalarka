<?php 
class BcShippingMethodsController extends AppController {	
	
	var $name 		= 'ShippingMethods';
	var $uses 		= array(
		'ShippingMethod'
	);

	function beforeFilter() {
	    parent::beforeFilter();
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * Shipping methods listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_add
	 * Add new shipping method
	 */
	function admin_add() {
		//
	}
	
	/**
	 * admin_edit
	 * Edit shipping method
	 */
	function admin_edit() {
		//
	}
	
	/**
	 * admin_remove
	 * Remove shipping method
	 */
	function admin_remove() {
		//
	}
}
?>