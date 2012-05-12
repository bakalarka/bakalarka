<?php
class BcGroup extends AppModel {
	var $name = 'BcGroup';
	var $table = 'groups';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation'
		),
		'Acl' => array('type' => 'requester')
	);
	
	var $hasAndMany = array(
		'User'
	);
	
	public function parentNode() {
        return null;
    }
}
?>