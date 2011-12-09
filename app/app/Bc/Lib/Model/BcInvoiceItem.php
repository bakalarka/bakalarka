<?php
class BcInvoiceItem extends AppModel {
	var $name = 'BcInvoiceItem';
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