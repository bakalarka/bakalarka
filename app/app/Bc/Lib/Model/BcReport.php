<?php
class BcReport extends AppModel {
	var $name = 'BcReport';
	var $primaryKey = 'id';
	
	//TODO - validation rules, validate system generated values?
	var $validation = array();
	
	var $belongsTo = array(
		'ReportType' => array(
			'className'		=> 'ReportType',
			'foreignKey'	=> 'report_type_id'
		)
		//message as Text?
	);
}
?>