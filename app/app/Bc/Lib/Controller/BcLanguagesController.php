<?php 
class BcLanguagesController extends AppController {	
	
	var $name 		= 'Languages';
	var $uses 		= array(
		'Language'
	);

	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * Languages listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_add
	 * Add new language
	 */
	function admin_add() {
		//
	}
	
	/**
	 * admin_edit
	 * Edit language
	 */
	function admin_edit() {
		//
	}
	
	/**
	 * admin_remove
	 * Remove language
	 */
	function admin_remove() {
		//
	}
}
?>