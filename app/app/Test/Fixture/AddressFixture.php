<?php

class AddressFixture extends CakeTestFixture {

	public $name = 'Address';

	public $import = 'Address';
    public $records = array(
    	//customer 1 contact
        array(
        	'id' => 1, 
        	'address_type_id' => '1', //contact
        	'user_id' => '5', //Customer 1
        	'company_id' => '', 
        	'street' => 'Mlynská dolina',
        	'zip' => '842 48', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer 1 billing address
        array(
        	'id' => 2, 
        	'address_type_id' => '2', //billing
        	'user_id' => '5', //Customer 1
        	'company_id' => '', 
        	'street' => 'Einsteninova 33',
        	'zip' => '852 01', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer 1 shipping address
        array(
        	'id' => 3, 
        	'address_type_id' => '3', //shipping
        	'user_id' => '5', //Customer 1
        	'company_id' => '', 
        	'street' => 'Palisády 12',
        	'zip' => '811 01', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer 1 contact address old
        array(
        	'id' => 4, 
        	'address_type_id' => '2', //shipping
        	'user_id' => '5', //Customer 1
        	'company_id' => '', 
        	'street' => 'Gagarinova 12',
        	'zip' => '821 04', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '0',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customer 1 shipping address old
        array(
        	'id' => 5, 
        	'address_type_id' => '3', //shipping
        	'user_id' => '5', //Customer 1
        	'company_id' => '', 
        	'street' => 'Vranovská 24',
        	'zip' => '851 01', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '0',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        
        //customers company contact
        array(
        	'id' => 6, 
        	'address_type_id' => '1', //contact
        	'user_id' => '', 
        	'company_id' => '2', //conpany of customer 1
        	'street' => 'Mlynská dolina',
        	'zip' => '842 48', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customers company billing address
        array(
        	'id' => 7, 
        	'address_type_id' => '2', //billing
        	'user_id' => '', 
        	'company_id' => '2', //conpany of customer 1
        	'street' => 'Einsteninova 33',
        	'zip' => '852 01', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //customers company shipping address
        array(
        	'id' => 8, 
        	'address_type_id' => '3', //shipping
        	'user_id' => '', 
        	'company_id' => '2', //conpany of customer 1
        	'street' => 'Palisády 12',
        	'zip' => '811 01', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),        
        //shop company contact
        array(
        	'id' => 9, 
        	'address_type_id' => '1', //contact
        	'user_id' => '', 
        	'company_id' => '1', 
        	'street' => 'Einsteinova 23',
        	'zip' => '851 01', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //shop company billing address
        array(
        	'id' => 10, 
        	'address_type_id' => '2', //billing
        	'user_id' => '', 
        	'company_id' => '1', 
        	'street' => 'Einsteninova 23',
        	'zip' => '851 01', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //shop company shipping address
        array(
        	'id' => 11, 
        	'address_type_id' => '3', //shipping
        	'user_id' => '', 
        	'company_id' => '1', 
        	'street' => 'Einsteinova 23',
        	'zip' => '851 01', 
        	'city' => 'Bratislava', 
        	'country_id' => '1', //Slovakia
        	'active' => '1',
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        
    );
}