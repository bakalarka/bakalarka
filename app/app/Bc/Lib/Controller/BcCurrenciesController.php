<?php 
class BcCurrenciesController extends AppController {	
	
	var $name 		= 'Currencies';
	var $uses 		= array(
		'Currency'
	);

	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * Currencies listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_add
	 * Add new currency
	 */
	function admin_add() {
		//
	}
	
	/**
	 * admin_edit
	 * Edit currency
	 */
	function admin_edit() {
		//
	}
	
	/**
	 * admin_remove
	 * Remove currency
	 */
	function admin_remove() {
		//
	}
}
?>