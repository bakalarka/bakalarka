<?php 
class BcTagsController extends AppController {	
	
	var $name 		= 'Tags';
	var $uses 		= array(
		'Tag'
	);

	function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('*');
	}
	
	//Tags listing
	function index() {
		//
	}
	
	//Add new tag
	function add() {
		//
	}
	
	//Edit tag
	function edit() {
		//
	}
	
	//Remove tag
	function remove() {
		//
	}
}
?>