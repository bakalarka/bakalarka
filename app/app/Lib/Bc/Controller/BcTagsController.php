<?php 
class BcTagsController extends AppController {	
	
	var $name 		= 'Tags';
	var $uses 		= array(
		'Tag'
	);

	function beforeFilter() {
	    parent::beforeFilter();
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * Tags listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_add
	 * Add new tag
	 */
	function admin_add() {
		//
	}
	
	/**
	 * admin_edit
	 * Edit tag
	 */
	function admin_edit() {
		//
	}
	
	/**
	 * admin_remove
	 * Remove tag
	 */
	function admin_remove() {
		//
	}
}
?>