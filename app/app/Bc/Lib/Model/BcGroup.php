<?php
class BcGroup extends AppModel {
	var $name = 'BcGroup';
	var $table = 'groups';
	
	var $hasAndBelongsToMany = array(
		'User'
	);
}
?>