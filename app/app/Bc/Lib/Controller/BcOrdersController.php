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
	
	/** frontend **/
	
	/**
	 * index
	 * List orders
	 */
	function index() {
		//
	}
	
	/**
	 * view
	 * View order
	 * @param int $id
	 */
	function view($id) {
		//
	}
	
	/**
	 * invoice
	 * View invoice
	 * @param int $id
	 */
	function invoice($id) {
		//
	}
	
	/**
	 * cancel
	 * Cancel order
	 */
	function cancel() {
		//
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * List orders
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_view_order
	 * View order
	 */
	function admin_view_order() {
		//
	}
	
	/**
	 * admin_change_state
	 * Change order status
	 */
	function admin_change_state() {
		//
	}
	
	/**
	 * admin_edit_order
	 * Edit order data
	 */
	function admin_edit_order() {
		//
	}
	
	/**
	 * admin_add_item
	 * Add item to order
	 */
	function admin_add_item() {
		//
	}
	
	/**
	 * admin_edit_item
	 * Edit order item
	 */
	function admin_edit_item() {
		//
	}
	
	/**
	 * admin_remove_item
	 * Remove item from order
	 */
	function admin_remove_item() {
		//
	}
	
	/** utility functions **/
		
}
?>