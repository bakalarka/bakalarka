<?php
class BcRelationType extends AppModel {
	var $name = 'BcRelationType';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMeny = array(
		'Related' => array(
			'className'		=> 'Related',
			'foreignKey'	=> 'Related.relation_type_id'
		)
	);
}
?>