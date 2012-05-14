<?php

class OrderFixture extends CakeTestFixture {

	public $name = 'Order';

	public $import = 'Order';
    public $records = array(
    	//customer1 created order
        array(
        	'id' => 1, 
        	'invoice_number' => '20120501',
			'issue_date' => '2012-05-10 11:00:00',
			'due_date' => '2012-05-24 11:00:00',
        	'provider_name' => 'Eshop',
        	'provider_address_id' => '9',
        	'provider_id_number' => '00000001',
        	'provider_tax_id_number' => '0000000001',
        	'provider_vat_number' => 'SK0000000001',
        	'provider_account' => '',
        	'customer_name' => 'Customer1',
        	'customer_address_id' => '2',
        	'customer_id_number' => '',
        	'customer_tax_id_number' => '',
        	'customer_vat_number' => '',
        	'customer_account' => '',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 processing order
        array(
        	'id' => 2, 
        	'invoice_number' => '20120502',
			'issue_date' => '2012-05-10 11:00:00',
			'due_date' => '2012-05-24 11:00:00',
        	'provider_name' => 'Eshop',
        	'provider_address_id' => '9',
        	'provider_id_number' => '00000001',
        	'provider_tax_id_number' => '0000000001',
        	'provider_vat_number' => 'SK0000000001',
        	'provider_account' => '',
        	'customer_name' => 'Customer1',
        	'customer_address_id' => '2',
        	'customer_id_number' => '',
        	'customer_tax_id_number' => '',
        	'customer_vat_number' => '',
        	'customer_account' => '',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 delivered order
        array(
        	'id' => 3, 
        	'invoice_number' => '20120503',
			'issue_date' => '2012-05-10 11:00:00',
			'due_date' => '2012-05-24 11:00:00',
        	'provider_name' => 'Eshop',
        	'provider_address_id' => '9',
        	'provider_id_number' => '00000001',
        	'provider_tax_id_number' => '0000000001',
        	'provider_vat_number' => 'SK0000000001',
        	'provider_account' => '',
        	'customer_name' => 'Customer1',
        	'customer_address_id' => '2',
        	'customer_id_number' => '',
        	'customer_tax_id_number' => '',
        	'customer_vat_number' => '',
        	'customer_account' => '',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
        //customer1 canceled order
       array(
        	'id' => 4, 
        	'invoice_number' => '20120504',
			'issue_date' => '2012-05-10 11:00:00',
			'due_date' => '2012-05-24 11:00:00',
        	'provider_name' => 'Eshop',
        	'provider_address_id' => '9',
        	'provider_id_number' => '00000001',
        	'provider_tax_id_number' => '0000000001',
        	'provider_vat_number' => 'SK0000000001',
        	'provider_account' => '',
        	'customer_name' => 'Customer1',
        	'customer_address_id' => '2',
        	'customer_id_number' => '',
        	'customer_tax_id_number' => '',
        	'customer_vat_number' => '',
        	'customer_account' => '',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
		//customer1 company order
       array(
        	'id' => 5, 
        	'invoice_number' => '20120505',
			'issue_date' => '2012-05-10 11:00:00',
			'due_date' => '2012-05-24 11:00:00',
        	'provider_name' => 'Eshop',
        	'provider_address_id' => '9',
        	'provider_id_number' => '00000001',
        	'provider_tax_id_number' => '0000000001',
        	'provider_vat_number' => 'SK0000000001',
        	'provider_account' => '',
        	'customer_name' => 'Customer1 company',
        	'customer_address_id' => '7',
        	'customer_id_number' => '00000002',
        	'customer_tax_id_number' => '0000000002',
        	'customer_vat_number' => 'SK0000000002',
        	'customer_account' => '',
        	'created' => '2012-05-10 11:00:00', 
        	'updated' => '2012-05-10 11:00:00'
        ),
	);
}