<?php
class RelationType extends AppModel {
	var $name = 'RelationType';
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