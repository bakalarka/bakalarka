<?php 
class BcSettingsController extends AppController {	
	
	var $name 		= 'Settings';
	var $uses 		= array(
		'Settings' 
	);
	
function beforeFilter() {
	    parent::beforeFilter();
	}
	
	/** backend **/
	
	/**
	 * admin_index
	 * Settings listing
	 */
	function admin_index() {
		//
	}
	
	/**
	 * admin_edit
	 * Edit settings
	 */
	function admin_edit() {
		//
	}

}
?>