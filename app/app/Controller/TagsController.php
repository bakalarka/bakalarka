<?php 
class TagsController extends AppController {	
	
	var $name 		= 'Tags';
	var $helpers 	= array('Html'); //TODO - helpers are in app_controller, not needed here
	var $uses 		= array(
		'Tag'
	);
		
}
?>