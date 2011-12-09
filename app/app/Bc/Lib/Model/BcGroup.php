<?php
class BcGroup extends AppModel {
	var $name = 'BcGroup';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validate = array();
	
	var $hasAndBelongsToMany = array(
		'User'
	);
}
?>