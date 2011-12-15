<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       Cake.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * This is a placeholder class.
 * Create the same file in app/Model/AppModel.php
 * Add your application-wide methods to the class, your models will inherit them.
 *
 * @package       Cake.Model
 */
class BcAppModel extends Model {
	
	//TODO - comment
	function alphaNumericDashUnderscore($check) {
        
		$value = array_values($check);
        $value = $value[0];

        return preg_match('|^[0-9a-zA-Z_-]*$|', $value);
    }
    
    //TODO - commnet, implement, name?
	function lettersNonLatin($check) {
        
		$value = array_values($check);
        $value = $value[0];

        return preg_match('|^[a-zA-Z_-]*$|', $value);
    }
    
	//TODO - commnet, implement
	function idNumber($check) {
        
		$value = array_values($check);
        $value = $value[0];

        return (bool) $value;
    }
    
	//TODO - commnet, implement
	function taxIdNumber($check) {
        
		$value = array_values($check);
        $value = $value[0];

        return (bool) $value;
    }
    
	//TODO - commnet, implement
	function vatNumber($check) {
        
		$value = array_values($check);
        $value = $value[0];

        return (bool) $value;
    }
	
}
