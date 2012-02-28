<?php
class BcCompany extends AppModel {
	var $name = 'BcCompany';
	var $table = 'companies';
	
	var $validation = array(
    	'name' => array(
    		'nameRule-1' => array (
    			'rule'    => 'notEmpty', 
        	    'message' => 'Company name can not be empty.',
    		),
    		'required' => true
    	),
    	'id_number' => array(
    		'id_number-1' => array (
    			'rule'    => 'idNumber', 
        	    'message' => 'Ivalid ID number format.',
    		),
    		'required' => true
    	),
    	'tax_id_number' => array(
    		'tax_id_number-1' => array (
    			'rule'    => 'taxIdNumber', 
        	    'message' => 'Ivalid Tax ID number format.',
    		),
    		'required' => true
    	),
    	'vat_number' => array(
    		'vat_number-1' => array (
    			'rule'    => 'vatNumber', 
        	    'message' => 'Ivalid VAT number format.',
    		)
    	)
	);
	
	var $belongsTo = array(
		'Address' => array(
            'className'		=> 'Address',
			'foreignKey'	=> 'address_id'
        )
    );
	
	var $hasMany = array(
        'Order' => array(
            'className'		=> 'Order',
			'foreignKey'	=> 'Order.company_id'
        ),
	); 
	
	var $hasAndBelongsToMany = array(
		'User'
	);
}
?>