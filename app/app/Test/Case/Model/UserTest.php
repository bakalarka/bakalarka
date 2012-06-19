<?php
App::uses('User', 'Model');
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

class TestUser extends User {
}

class UserTest extends CakeTestCase {

	public $fixtures = array(
    	'app.address_type',
		'app.country',
		'app.address',
		'app.company',
		'app.group',
		'app.user'
    );
	
    /**
     * setUp method
     *  
     * @return void
	 */
    public function setUp() {    	
        parent::setUp();
        $this->User = ClassRegistry::init('TestUser');
        $this->User->Behaviors->disable('Acl');
    }
    
	/**
	 * tearDown method
	 * 
	 * @return void
	 */
	public function tearDown() {
		parent::tearDown();
		unset($this->User->request, $this->User);
	}
	
	/**
	 * Test create user
	 */
	public function testCreateUser() {
		$newUser = array(
			'User' => array(
				'username' => 'test',
				'password' => '12345678',
				'email' => 'test@test.com',
				'group_id' => 1, 
				'name' => 'Test',
				'surname' => 'Test',
				'phone' => '0909123456',
				'registration_code' => '12345678910'
			),
			'Address' => array(
				'street' => 'Test street',
				'zip' => '12345',
				'city' => 'Test City',
				'country_id' => 1
			)
		);
		$user = $this->User->createNew($newUser);
		$this->assertTrue((bool) $user);
		
		unset($user['TestUser']['created']);
		unset($user['TestUser']['modified']);
		$expectedUser = array(
			'id' => $this->User->getLastInsertID(),
			'username' => 'test',
			'password' => AuthComponent::password('12345678'),
			'email' => 'test@test.com',
			'group_id' => 1, 
			'name' => 'Test',
			'surname' => 'Test',
			'phone' => '0909123456',
			'registration_code' => '12345678910',
			'active' => 0,
			'disabled' => 0, 
			'deleted' => 0
		);
		
		$this->assertEqual($user['TestUser'], $expectedUser);
		
		$address = $this->User->Address->read(null, $this->User->Address->getLastInsertID());
		unset($address['Address']['created']);
		unset($address['Address']['modified']);
		$expectedAddress = array(
			'id' => $this->User->Address->getLastInsertID(),
			'address_type_id' => 1,
			'user_id' => $this->User->getLastInsertID(),
			'company_id' => null,
			'street' => 'Test street',
			'zip' => '12345',
			'city' => 'Test City',
			'country_id' => 1,
			'active' => 1
		);
		
		$this->assertEqual($address['Address'], $expectedAddress);
		
	}
	
	/**
	 * Test account confirmation
	 */
	public function testConfirm() {
	
		$this->assertEqual($this->User->field('active', array('id' => 7)), 0);
		$this->assertTrue((bool) $this->User->confirm('1234567897'));
		$this->assertEqual($this->User->field('active', array('id' => 7)), 1);
		
		$this->assertFalse($this->User->confirm('1234567891'));
		
	}
	
	/**
	 * Test check mail address
	 */
	public function testCheckMail() {
	
		$this->assertEqual($this->User->checkMail('superadmin@mail.com'), 1);
		$this->assertFalse($this->User->checkMail('false@mail.com'));
		
	}
	
	/**
	 * Test check mail address of active user
	 */
	public function testCheckActiveMail() {
	
		$this->assertEqual($this->User->checkActiveMail('superadmin@mail.com'), 1);
		$this->assertFalse($this->User->checkActiveMail('customer3@mail.com'));
		$this->assertFalse($this->User->checkActiveMail('customer4@mail.com'));
		$this->assertFalse($this->User->checkActiveMail('customer5@mail.com'));
		
	}

	/**
	 * Test profile
	 */
	public function testProfile() {
		$expectedProfile = array(
			'TestUser' => array(
				'id' => 5, 
	        	'username' => 'customer1', 
	        	'password' => '963d708a99a0314d5f000d880b6f9579bb25f77e', 
	        	'email' => 'customer1@mail.com', 
	        	'group_id' => '5',
	        	'name' => 'Name 05', 
	        	'surname' => 'Surname 05', 
	        	'phone' => '0909 123 456', 
	        	'active' => 1, 
	        	'disabled' => 0, 
	        	'deleted' => 0,
	        	'registration_code' => '1234567895', 
	        	'created' => '2012-05-10 15:00:00', 
	        	'modified' => '2012-05-10 15:00:00'
			),
			'Address' => array(
	        	'id' => 1, 
	        	'address_type_id' => '1', //contact
	        	'user_id' => '5', //Customer 1
	        	'company_id' => '0', 
	        	'street' => 'Mlynsk',
	        	'zip' => '842 48', 
	        	'city' => 'Bratislava', 
	        	'country_id' => '1', //Slovakia
	        	'active' => '1',
	        	'created' => '2012-05-10 11:00:00', 
	        	'modified' => '2012-05-10 11:00:00'
			),
			'Group' => array(
				'id' => '5',
				'name' => 'customer',
				'created' => null,
				'modified' => null
			),
			'Company' => array()
			
		);
		$profile = $this->User->profile(5);
		
		$this->assertEqual($profile, $expectedProfile);
	}
	
	/**
	 * Test edit data
	 */
	public function testEditData() {
		$userId = 5;
		$data = array(
			'User' => array(
				'username' => 'customer1XXX', 
	        	'password' => '987654321', 
	        	'email' => 'customer1XXX@mail.com', 
				'group_id' => 1,
	        	'name' => 'NameXXX', 
	        	'surname' => 'SurnameXXX', 
	        	'phone' => '0919 123 456',
				'active' => 0, 
	        	'disabled' => 1, 
	        	'deleted' => 1,
	        	'registration_code' => '01234567895',
			),
			'Address' => array(
				'id' => 1,
				'address_type_id' => '0',
				'street' => 'Vaclavak',
	        	'zip' => '12345', 
	        	'city' => 'Praha', 
	        	'country_id' => 2, //Slovakia
				'active' => '1',
			)
		);
		
		$editResult = $this->User->editData($userId, $data);
		$user = $this->User->profile($userId);
		
		$this->assertTrue($editResult, 'Data edited successful.');
		
		$this->assertEqual($user['TestUser']['username'], 'customer1XXX', 'Username change.');
		$this->assertEqual($user['TestUser']['password'], AuthComponent::password('987654321'), 'Password change.');
		$this->assertEqual($user['TestUser']['email'], 'customer1XXX@mail.com', 'Email change.');
		$this->assertEqual($user['TestUser']['group_id'], 5, 'Group no change.');
		$this->assertEqual($user['TestUser']['name'], 'NameXXX', 'Name change.');
		$this->assertEqual($user['TestUser']['surname'], 'SurnameXXX', 'Surname change.');
		$this->assertEqual($user['TestUser']['phone'], '0919 123 456', 'Phone change.');
		$this->assertEqual($user['TestUser']['active'], 1, 'Active no change.');
		$this->assertEqual($user['TestUser']['disabled'], 0, 'Disable no change.');
		$this->assertEqual($user['TestUser']['deleted'], 0, 'Deleted no change.');
		$this->assertEqual($user['TestUser']['registration_code'], '1234567895', 'Registration code no change.');
		$this->assertNotEqual($user['Address']['id'], 1, 'New address created.');
		$this->assertEqual($user['Address']['address_type_id'], 1, 'Address type no change.');
		$this->assertEqual($user['Address']['user_id'], 5, 'Address owner no change.');
		$this->assertEqual($user['Address']['street'], 'Vaclavak', 'Street change.');
		$this->assertEqual($user['Address']['zip'], '12345', 'ZIP change.');
		$this->assertEqual($user['Address']['city'], 'Praha', 'City changed.');
		$this->assertEqual($user['Address']['country_id'], 2, 'Country changed.');
		$this->assertEqual($user['Address']['active'], 1, 'Address is active');
		
		$oldAddress = $this->User->Address->read(null, 1);
		$this->assertEqual($oldAddress['Address']['active'], 0, 'Old address is inactive');
	}
	
	/**
	 * Test creating new password
	 */ 
	public function testNewPass() {
		$oldPass = AuthComponent::password($this->User->field('password', 1));
		$newPass = $this->User->newPass(1);
		$this->assertNotEqual($newPass, $oldPass);
		$this->assertTrue((bool) $newPass);
	}
	
	/**
	 * Test soft delete
	 */
	public function testSoftDelete() {		
		$this->User->softDelete(5);
		$this->User->recursive = -1;
		$user = $this->User->read(null, 5);
		$this->assertEqual($user['TestUser']['deleted'], 1);
	}
	
	/**
	 * Test disable
	 */
	public function testDisable() {
		$this->User->disable(5);
		$this->User->recursive = -1;
		$user = $this->User->read(null, 5);
		$this->assertEqual($user['TestUser']['disabled'], 1);
	}
	
	/**
	 * Test enable
	 */
	public function testEnable() {
		$this->User->enable(8);
		$this->User->recursive = -1;
		$user = $this->User->read(null, 8);
		$this->assertEqual($user['TestUser']['disabled'], 0);
	}
	
	/**
	 * Test activate
	 */
	public function testActivate() {
		$this->User->activate(7);
		$this->User->recursive = -1;
		$user = $this->User->read(null, 7);
		$this->assertEqual($user['TestUser']['active'], 1);
	}
	
}