<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * This is a placeholder class.
 * Create the same file in app/Controller/AppController.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       Cake.Controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */
class BcAppController extends Controller {
   	
	var $components = array(
   		'Acl', 
   		'Auth',
        'Session', 
        'Auth', 
        'Email', 
        'Product'
 	);
 	
   	var $helpers = array('Html', 'Session', 'Form');
   	
	public function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authorize = array(
	        'Controller',
	        'Actions' => array('actionPath' => 'controllers')
	    );
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'index');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'index');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
        
        //localization
        if($this->Session->check('Config.language')) {
            Configure::write('Config.language', $this->Session->read('Config.language'));
        } else {
            $this->Session->write('Config.language', Configure::read('Config.language'));
        }  
    }
    
	function isAuthorized($user) {
    
		//return true;
		// return false;
    	return $this->Auth->loggedIn();
	}
   	
}
?>