<?php

class UserFixture extends CakeTestFixture {

	public $name = 'User';

	public $import = 'User';
    public $records = array(
    	//super admin
        array(
        	'id' => 1, 
        	'username' => 'superadmin', 
        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
        	'email' => 'superadmin@mail.com', 
        	'group_id' => '1',
        	'name' => 'Name 01', 
        	'surname' => 'Surname 01', 
        	'phone' => '0909 123 456', 
        	'active' => '1', 
        	'disabled' => '0', 
        	'deleted' => '0',
        	'registration_code' => '1234567891', 
        	'created' => '2012-05-10 11:00:00', 
        	'modified' => '2012-05-10 11:00:00'
        ),
        //regular admin
        array(
        	'id' => 2, 
        	'username' => 'admin', 
        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
        	'email' => 'admin@mail.com', 
        	'group_id' => '2',
        	'name' => 'Name 02', 
        	'surname' => 'Surname 02', 
        	'phone' => '0909 123 456', 
        	'active' => '1', 
        	'disabled' => '0', 
        	'deleted' => '0',
        	'registration_code' => '1234567892', 
        	'created' => '2012-05-10 12:00:00', 
        	'modified' => '2012-05-10 12:00:00'
        ),
        //product manager
        array(
        	'id' => 3, 
        	'username' => 'productmanager', 
        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
        	'email' => 'pruductmanager@mail.com', 
        	'group_id' => '3',
        	'name' => 'Name 03', 
        	'surname' => 'Surname 03', 
        	'phone' => '0909 123 456', 
        	'active' => '1', 
        	'disabled' => '0', 
        	'deleted' => '0',
        	'registration_code' => '1234567893', 
        	'created' => '2012-05-10 13:00:00', 
        	'modified' => '2012-05-10 13:00:00'
        ),
        //order manager
        array(
        	'id' => 4, 
        	'username' => 'ordermanager', 
        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
        	'email' => 'ordermanager@mail.com', 
        	'group_id' => '4',
        	'name' => 'Name 04', 
        	'surname' => 'Surname 04', 
        	'phone' => '0909 123 456', 
        	'active' => '1', 
        	'disabled' => '0', 
        	'deleted' => '0',
        	'registration_code' => '1234567894', 
        	'created' => '2012-05-10 14:00:00', 
        	'modified' => '2012-05-10 14:00:00'
        ),
        //customer
        array(
        	'id' => 5, 
        	'username' => 'customer1', 
        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
        	'email' => 'customer1@mail.com', 
        	'group_id' => '5',
        	'name' => 'Name 05', 
        	'surname' => 'Surname 05', 
        	'phone' => '0909 123 456', 
        	'active' => '1', 
        	'disabled' => '0', 
        	'deleted' => '0',
        	'registration_code' => '1234567895', 
        	'created' => '2012-05-10 15:00:00', 
        	'modified' => '2012-05-10 15:00:00'
        ),
        //another customer
        array(
        	'id' => 6, 
        	'username' => 'customer2', 
        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
        	'email' => 'customer2@mail.com', 
        	'group_id' => '5',
        	'name' => 'Name 06', 
        	'surname' => 'Surname 06', 
        	'phone' => '0909 123 456', 
        	'active' => '1', 
        	'disabled' => '0', 
        	'deleted' => '0',
        	'registration_code' => '1234567896', 
        	'created' => '2012-05-10 16:00:00', 
        	'modified' => '2012-05-10 16:00:00'
        ),
        //nonactive user
        array(
        	'id' => 7, 
        	'username' => 'nonactiveUser', 
        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
        	'email' => 'customer3@mail.com', 
        	'group_id' => '5',
        	'name' => 'Non Active', 
        	'surname' => 'User', 
        	'phone' => '0909 123 456', 
        	'active' => '0', 
        	'disabled' => '0',
        	'deleted' => '0', 
        	'registration_code' => '1234567897', 
        	'created' => '2012-05-10 17:00:00', 
        	'modified' => '2012-05-10 17:00:00'
        ),
        //disabled user
        array(
        	'id' => 8, 
        	'username' => 'disabledUser', 
        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
        	'email' => 'customer4@mail.com', 
        	'group_id' => '5',
        	'name' => 'Disabled', 
        	'surname' => 'User', 
        	'phone' => '0909 123 456', 
        	'active' => '1', 
        	'disabled' => '1', 
        	'deleted' => '0',
        	'registration_code' => '1234567898', 
        	'created' => '2012-05-10 18:00:00', 
        	'modified' => '2012-05-10 18:00:00'
        ),
        //deleted user
        array(
        	'id' => 9, 
        	'username' => 'deletedUser', 
        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
        	'email' => 'customer5@mail.com', 
        	'group_id' => '5',
        	'name' => 'Deleted', 
        	'surname' => 'User', 
        	'phone' => '0909 123 456', 
        	'active' => '1', 
        	'disabled' => '0', 
        	'deleted' => '1',
        	'registration_code' => '1234567899', 
        	'created' => '2012-05-10 19:00:00', 
        	'modified' => '2012-05-10 19:00:00'
        )
    );
}