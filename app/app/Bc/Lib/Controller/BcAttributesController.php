<?php 
class BcAttributesController extends AppController {	
	
	var $name 		= 'Attribbutes';
	var $uses 		= array(
		'Attribute'
	);

	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * Attributes listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_add
	 * Add new attribute
	 */
	function admin_add() {
		//
	}
	
	/**
	 * admin_edit
	 * Edit attribute
	 */
	function admin_edit() {
		//
	}
	
	/**
	 * admin_remove
	 * Remove attribute
	 */
	function admin_remove() {
		//
	}
}
?>