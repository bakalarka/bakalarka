<?php
class BcReport extends AppModel {
	var $name = 'BcReport';
	var $table = 'reports';
	
	var $belongsTo = array(
		'ReportType' => array(
			'className'		=> 'ReportType',
			'foreignKey'	=> 'report_type_id'
		),
		'Message' => array(
			'className'		=> 'Text',
			'foreignKey'	=> 'message_id'
		)
	);
}
?>