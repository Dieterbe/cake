<?php
/* SVN FILE: $Id: xml.group.php 7848 2008-11-08 02:58:37Z renan.saddam $ */
/**
 * Xml Group test.
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
 * @since         CakePHP(tm) v 1.2.0.4206
 * @version       $Revision: 7848 $
 * @modifiedby    $LastChangedBy: renan.saddam $
 * @lastmodified  $Date: 2008-11-08 03:58:37 +0100 (Sat, 08 Nov 2008) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/** XmlGroupTest
 *
 * This test group will run view class tests (view, theme).
 *
 * @package       cake.tests
 * @subpackage    cake.tests.groups
 */
/**
 * XmlGroupTest class
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class XmlGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'All core views'
 * @access public
 */
	var $label = 'All Xml based classes';
/**
 * AllCoreViewsGroupTest method
 *
 * @access public
 * @return void
 */
	function XmlGroupTest() {
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'xml');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'view' . DS . 'helpers' . DS .'rss');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'view' . DS . 'helpers' . DS .'xml');
	}
}
?>
