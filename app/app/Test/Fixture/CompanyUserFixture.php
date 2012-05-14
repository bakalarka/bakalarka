<?php

class CompanyUserFixture extends CakeTestFixture {

	public $name = 'CompanyUser';

	public $import = array('table' => 'companies_users');
    public $records = array(
    	//shop company
        array(
        	'id' => 1, 
        	'company_id' => '1',
        	'user_id' => '1', //superadmin
        ),
        //customer 1 <-> customers company
        array(
        	'id' => 2, 
        	'company_id' => '2',
        	'user_id' => '5', //customer 1
        )
    );
}