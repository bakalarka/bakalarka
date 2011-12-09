<?php
class BcReportType extends AppModel {
	var $name = 'BcReportType';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $hasMany = array(
		'Report' => array(
			'className'		=> 'Report',
			'foreignKey'	=> 'Report.report_type_id'
		)
	);
}
?>