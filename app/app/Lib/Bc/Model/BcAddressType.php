<?php
class BcAddressType extends AppModel {
	var $name = 'BcAddressType';
	var $table = 'address_types';
	
	public $actsAs = array(
		'Containable', 
		'Translate' => array(
			'name' => 'nameTranslation'
		),
	);
}
?>