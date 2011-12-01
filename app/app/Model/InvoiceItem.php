<?php
class InvoiceItem extends AppModel {
	var $name = 'InvoiceItem';
	var $primaryKey = 'id';
	
	//TODO - validation rules
	var $validation = array();
	
	var $belongsTo = array(
		'Invoice' => array(
			'className'		=> 'Invoice',
			'foreignKey'	=> 'invoice_id'
		)
	);
}
?>