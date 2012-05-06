<?php 
class BcGroupsController extends AppController {	
	
	var $name 		= 'Groups';
	var $uses 		= array(
		'Group'
	);
	
	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * Groups listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_add
	 * Add new group
	 */
	function admin_add() {
		//
	}
	
	/**
	 * admin_edit
	 * Edit group
	 */
	function admin_edit() {
		//
	}
	
	/**
	 * admin_remove
	 * Remove group
	 */
	function admin_remove() {
		//
	}
		
}
?>