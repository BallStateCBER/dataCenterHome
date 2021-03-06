<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
Router::connect('/commentaries/*', array('controller' => 'pages', 'action' => 'commentaries_redirect'));
Router::connect('/refresh_latest_release', array('controller' => 'pages', 'action' => 'refresh_latest_release'));
Router::connect('/panopticon', array('controller' => 'pages', 'action' => 'overview'));
Router::connect('/terms', array('controller' => 'pages', 'action' => 'terms'));
Router::connect('/slack', array('controller' => 'pages', 'action' => 'slack'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
