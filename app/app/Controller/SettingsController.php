<?php 
class SettingsController extends AppController {	
	
	var $name 		= 'Settings';
	var $helpers 	= array('Html'); //TODO - helpers are in app_controller, not needed here
	var $uses 		= array(
		'Settings' 
	);

}
?>