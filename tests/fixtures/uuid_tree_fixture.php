<?php
/* SVN FILE: $Id: uuid_tree_fixture.php 7995 2009-01-14 23:40:47Z AD7six $ */
/**
 * UUID Tree behavior fixture.
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
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.7984
 * @version       $Revision: 7995 $
 * @modifiedby    $LastChangedBy: AD7six $
 * @lastmodified  $Date: 2009-01-15 00:40:47 +0100 (Thu, 15 Jan 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * UuidTreeFixture class
 *
 * @uses          CakeTestFixture
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class UuidTreeFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'UuidTree'
 * @access public
 */
	var $name = 'UuidTree';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id'	=> array('type' => 'string', 'length' => 36, 'key' => 'primary'),
		'name'	=> array('type' => 'string','null' => false),
		'parent_id' => array('type' => 'string', 'length' => 36),
		'lft'	=> array('type' => 'integer','null' => false),
		'rght'	=> array('type' => 'integer','null' => false)
	);
}
?>