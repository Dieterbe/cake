<?php
/* SVN FILE: $Id: routing_system.group.php 7848 2008-11-08 02:58:37Z renan.saddam $ */
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake.tests
 * @subpackage    cake.tests.groups
 * @since         CakePHP(tm) v 1.2.0.5517
 * @version       $Revision: 7848 $
 * @modifiedby    $LastChangedBy: renan.saddam $
 * @lastmodified  $Date: 2008-11-08 03:58:37 +0100 (Sat, 08 Nov 2008) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/** RoutingSystemGroupTest
 *
 * This test group will run all the Router/Dispatcher (and related) tests
 *
 * @package       cake.tests
 * @subpackage    cake.tests.groups
 */
/**
 * RoutingSystemGroupTest class
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class RoutingSystemGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'Routing system'
 * @access public
 */
	var $label = 'Routing system';
/**
 * RoutingSystemGroupTest method
 *
 * @access public
 * @return void
 */
	function RoutingSystemGroupTest() {
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'dispatcher');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'router');
	}
}
?>
