<?php
class BcGroup extends AppModel {
	var $name = 'BcGroup';
	var $table = 'groups';
	public $actsAs = array('Acl' => array('type' => 'requester'));
	
	var $hasAndMany = array(
		'User'
	);
	
	public function parentNode() {
        return null;
    }
}
?>