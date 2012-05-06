<?php
class BcInvoiceItem extends AppModel {
	var $name = 'BcInvoiceItem';
	var $table = 'invoice_items';
	
	var $belongsTo = array(
		'Invoice' => array(
			'className'		=> 'Invoice',
			'foreignKey'	=> 'invoice_id'
		)
	);
}
?>