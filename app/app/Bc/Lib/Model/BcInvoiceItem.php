<?php
class BcInvoiceItem extends AppModel {
	var $name = 'BcInvoiceItem';
	var $primaryKey = 'id';
	
	//TODO - validation rules, validate system generated values?
	var $validation = array();
	
	var $belongsTo = array(
		'Invoice' => array(
			'className'		=> 'Invoice',
			'foreignKey'	=> 'invoice_id'
		)
	);
}
?>