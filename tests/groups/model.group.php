<?php
/* SVN FILE: $Id: model.group.php 7848 2008-11-08 02:58:37Z renan.saddam $ */
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
/** ModelGroupTest
 *
 * This test group will run all model-layer and related tests, (behaviors, etc.) excluding
 * database driver-specific tests
 *
 * @package       cake.tests
 * @subpackage    cake.tests.groups
 */
/**
 * ModelGroupTest class
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class ModelGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'All model tests'
 * @access public
 */
	var $label = 'All model tests';
/**
 * ModelGroupTest method
 *
 * @access public
 * @return void
 */
	function ModelGroupTest() {
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'model' . DS . 'model');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'model' . DS . 'db_acl');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'model' . DS . 'schema');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'model' . DS . 'datasources' . DS . 'dbo_source');
		TestManager::addTestCasesFromDirectory($this, CORE_TEST_CASES . DS . 'libs' . DS . 'model' . DS . 'behaviors');
	}
}
?>
