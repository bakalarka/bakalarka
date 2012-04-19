<?php 
class BcTaxesController extends AppController {	
	
	var $name 		= 'Taxes';
	var $uses 		= array(
		'Tax'
	);

	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * Taxes listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_add
	 * Add new tax
	 */
	function admin_add() {
		//
	}
	
	/**
	 * admin_edit
	 * Edit tax
	 */
	function admin_edit() {
		//
	}
	
	/**
	 * admin_remove
	 * Remove tax
	 */
	function admin_remove() {
		//
	}
}
?>