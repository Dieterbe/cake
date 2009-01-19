<?php
/* SVN FILE: $Id: unconventional_tree_fixture.php 7880 2008-11-20 13:57:44Z AD7six $ */
/**
 * Unconventional Tree behavior class test fixture.
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
 * @since         CakePHP(tm) v 1.2.0.7879
 * @version       $Revision: 7880 $
 * @modifiedby    $LastChangedBy: AD7six $
 * @lastmodified  $Date: 2008-11-20 14:57:44 +0100 (Thu, 20 Nov 2008) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * UnconventionalTreeFixture class
 *
 * Like Number tree, but doesn't use the default values for lft and rght or parent_id
 *
 * @uses          CakeTestFixture
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class UnconventionalTreeFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'FlagTree'
 * @access public
 */
	var $name = 'UnconventionalTree';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id'	=> array('type' => 'integer','key' => 'primary'),
		'name'	=> array('type' => 'string','null' => false),
		'join' => 'integer',
		'left'	=> array('type' => 'integer','null' => false),
		'right'	=> array('type' => 'integer','null' => false),
	);
}
?>