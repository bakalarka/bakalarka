<?php 
class GroupsController extends AppController {	
	
	var $name 		= 'Groups';
	var $helpers 	= array('Html'); //TODO - helpers are in app_controller, not needed here
	var $uses 		= array(
		'Group'
	);
		
}
?>