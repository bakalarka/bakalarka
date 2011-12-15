<?php
class BcReportType extends AppModel {
	var $name = 'BcReportType';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array(
		//TODO - name shoud be Text record
	);
	
	var $hasMany = array(
		'Report' => array(
			'className'		=> 'Report',
			'foreignKey'	=> 'Report.report_type_id'
		)
	);
}
?>