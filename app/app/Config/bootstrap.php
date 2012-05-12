<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as 
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Plugin' => array('/full/path/to/plugins/', '/next/full/path/to/plugins/'),
 *     'Model' =>  array('/full/path/to/models/', '/next/full/path/to/models/'),
 *     'View' => array('/full/path/to/views/', '/next/full/path/to/views/'),
 *     'Controller' => array('/full/path/to/controllers/', '/next/full/path/to/controllers/'),
 *     'Model/Datasource' => array('/full/path/to/datasources/', '/next/full/path/to/datasources/'),
 *     'Model/Behavior' => array('/full/path/to/behaviors/', '/next/full/path/to/behaviors/'),
 *     'Controller/Component' => array('/full/path/to/components/', '/next/full/path/to/components/'),
 *     'View/Helper' => array('/full/path/to/helpers/', '/next/full/path/to/helpers/'),
 *     'Vendor' => array('/full/path/to/vendors/', '/next/full/path/to/vendors/'),
 *     'Console/Command' => array('/full/path/to/shells/', '/next/full/path/to/shells/'),
 *     'locales' => array('/full/path/to/locale/', '/next/full/path/to/locale/')
 * ));
 *
 */

/**
 * Register Bc packages
 */
App::build(array(
    //'Plugin' => array('/full/path/to/plugins/', '/next/full/path/to/plugins/'),
    'Bc/Model' =>  array(APP.'Lib'.DS.'Bc'.DS.'Model'.DS),
    'Bc/View' => array(APP.'Lib'.DS.'Bc'.DS.'View'.DS),
    'Bc/Controller' => array(APP.'Lib'.DS.'Bc'.DS.'Controller'.DS),
    'Bc/Model/Datasource' => array(APP.'Lib'.DS.'Bc'.DS.'Model'.DS.'Datasource'.DS),
    'Bc/Model/Behavior' => array(APP.'Lib'.DS.'Bc'.DS.'Model'.DS.'Behavior'.DS),
    'Bc/Controller/Component' => array(APP.'Lib'.DS.'Bc'.DS.'Controller'.DS.'Component'.DS),
    'Bc/View/Helper' => array(APP.'Lib'.DS.'Bc'.DS.'View'.DS.'Helper'.DS),
    ),
    App::REGISTER
);

/**
 * Add new 'backup' paths for most packages
 */
App::build(array(
    //'Plugin' => array('/full/path/to/plugins/', '/next/full/path/to/plugins/'),
    //'Model' =>  array(APP.'Model'.DS, APP.'Bc'.DS.'App'.DS.'Model'.DS),
    'View' => array(APP.'View'.DS, APP.'Lib'.DS.'Bc'.DS.'View'.DS),
    //'Controller' => array(APP.'Controller'.DS, APP.'Bc'.DS.'App'.DS.'Controller'.DS),
    //'Model/Datasource' => array(APP.'Model'.DS.'Datasource'.DS, APP.'Bc'.DS.'App'.DS.'Model'.DS.'Datasource'.DS),
    //'Model/Behavior' => array(APP.'Model'.DS.'Behavior'.DS, APP.'Bc'.DS.'App'.DS.'Model'.DS.'Behavior'.DS),
    //'Controller/Component' => array(APP.'Controller'.DS.'Component'.DS, APP.'Bc'.DS.'App'.DS.'Controller'.DS.'Component'.DS),
    //'View/Helper' => array(APP.'View'.DS.'Helper'.DS, APP.'Bc'.DS.'App'.DS.'View'.DS.'Helper'.DS),
//    'Vendor' => array('/full/path/to/vendors/', '/next/full/path/to/vendors/'),
//    'Console/Command' => array('/full/path/to/shells/', '/next/full/path/to/shells/'),
//    'locales' => array('/full/path/to/locale/', '/next/full/path/to/locale/')
    ),
    App::PREPEND
);

//debug(App::paths());


/**
 * Custom Inflector rules, can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */

/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
 *
 */

/**
 * Load ACL manager
 */
CakePlugin::load('AclManager', array('bootstrap' => true));

/**
 * set default language
 */
Configure::write('Config.language', 'eng');