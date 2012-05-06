<?php 
class BcProductsController extends AppController {	
	
	var $name 		= 'Products';
	var $uses 		= array(
		'Product'
	);
	
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	/** frontend **/
	
	/**
	 * index
	 * List products
	 */
	function index($category) {
		//
	}
	
	/**
	 * detail
	 * Product detail
	 */
	function detail() {
		//
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * List products
	 */
	function admin_index($category) {
		//
	}
	
	/**
	 * admin_add
	 * Add new product
	 */
	function admin_add() {
		//
	}
	
	/**
	 * admin_clone
	 * Create new product from existing
	 */
	function admin_clone() {
		//
	}
	
	/**
	 * admin_view
	 * View product detail
	 */
	function admin_view($id) {
		
	}
	
	/**
	 * admin_edit
	 * Edit existing product
	 */
	function admin_edit() {
		//
	}
	
	/**
	 * admin_hide
	 * Hide product
	 */
	function admin_hide() {
		//
	}
	
	/**
	 * admin_delete
	 * Delete a product
	 */
	function admin_delete() {
		//
	}
	
	/**
	 * admin_add_tag
	 * Add tag to product
	 */
	function admin_add_tag() {
		//
	}
	
	/**
	 * admin_remove_tag
	 * Remove tag from product
	 */
	function admin_remove_tag() {
		//
	}
	
	/**
	 * admin_add_category
	 * Add category to product
	 */
	function admin_add_category() {
		//
	}
	
	/**
	 * admin_remove_category
	 * Remove category from product
	 */
	function admin_remove_category() {
		//
	}
	
	/**
	 * admin_add_attribute
	 * Add attribute to product
	 */
	function admin_add_attribute() {
		//
	}
	
	/**
	 * admin_edit_attribute
	 * Edit attribute from product
	 */
	function admin_edit_attribute() {
		//
	}
	
	/**
	 * admin_remove_attribute
	 * Remove attribute from product
	 */
	function admin_remove_attribute() {
		//
	}
	
	/**
	 * admin_add_relation
	 * Add relation to product
	 */
	function admin_add_relation() {
		//
	}
	
	/**
	 * admin_change_relation_type
	 * Change product relation type
	 */
	function admin_change_relation_type() {
		//
	}
	
	/**
	 * admin_remove_relation
	 * Remove relation to product
	 */
	function admin_remove_relation() {
		//
	}
	
	/**
	 * admin_add_image
	 * Add image to product gallery
	 */
	function admin_add_image() {
		//
	}
	
	/**
	 * admin_edit_image_data
	 * Edit image data from product gallery
	 */
	function admin_edit_image_data() {
		//
	}
	
	/**
	 * admin_remove_image
	 * Remove image from product gallery
	 */
	function admin_remove_image() {
		//
	}
	
	/**
	 * admin_shipping_method
	 * Add shipping to product
	 */
	function admin_add_shipping_method() {
		//
	}
	
	/**
	 * admin_edit_shipping_method
	 * Edit shipping method from product
	 */
	function admin_edit_shipping_method() {
		//
	}
	
	/**
	 * admin_remove_shipping_method
	 * Remove shipping_method from product 
	 */
	function admin_remove_shipping_method() {
		//
	}
	
	/** utility functions **/
	
		
}
?>