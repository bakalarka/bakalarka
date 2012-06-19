<?php

class CompanyFixture extends CakeTestFixture {

	public $name = 'Company';

	public $import = 'Company';
    public $records = array(
    	//Shop company data
        array(
        	'id' => 1, 
        	'name' => 'My Shop', 
        	'id_number' => '00000001', 
        	'tax_id_number' => '0000000001', 
        	'vat_number' => 'SK0000000001',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //Company of Customer 1
        array(
        	'id' => 2, 
        	'name' => 'Customers', 
        	'id_number' => '00000002', 
        	'tax_id_number' => '0000000002', 
        	'vat_number' => 'SK0000000002',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        )
    );
}