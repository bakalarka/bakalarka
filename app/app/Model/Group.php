<?php
class Group extends AppModel {
	var $name = 'Group';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validate = array();
	
	var $hasAndBelongsToMany = array(
		'User'
	);
}
?>