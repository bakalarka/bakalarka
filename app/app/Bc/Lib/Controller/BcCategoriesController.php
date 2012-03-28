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
	
	//Category listing
	function index() {
		//
	}
	
	//Add new category
	function add() {
		//
	}
	
	//Edit category
	function edit() {
		//
	}
	
	//Remove category
	function remove() {
		//
	}
		
}
?>