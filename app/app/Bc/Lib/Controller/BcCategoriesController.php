<?php 
class BcCategoriesController extends AppController {	
	
	var $name 		= 'Categories';
	var $uses 		= array(
		'Category'
	);
	
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	/** frontend **/
	//disable
	function index() {
		//
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * Category listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_add
	 * Add category
	 */
	function admin_add() {
		//
	}
	
	/**
	 * admin_edit
	 * Edit category
	 */
	function admin_edit() {
		//
	}
	
	/**
	 * admin_remove
	 * Remove category
	 */
	function admin_remove() {
		//
	}
		
}
?>