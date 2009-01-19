<?php
/* SVN FILE: $Id: fruit_fixture.php 7960 2008-12-25 22:51:10Z nate $ */
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
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.7953
 * @version       $Revision: 7960 $
 * @modifiedby    $LastChangedBy: nate $
 * @lastmodified  $Date: 2008-12-25 23:51:10 +0100 (Thu, 25 Dec 2008) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * Short description for class.
 *
 * @package       cake.tests
 * @subpackage    cake.tests.fixtures
 */
class FruitFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'Fruit'
 * @access public
 */
	var $name = 'Fruit';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'string', 'length' => 36, 'key' => 'primary'),
		'name' => array('type' => 'string', 'length' => 255),
		'color' => array('type' => 'string', 'length' => 13),
		'shape' => array('type' => 'string', 'length' =>  255),
		'taste' => array('type' => 'string', 'length' => 255)
	);
/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array(
			'id' => '481fc6d0-b920-43e0-a40d-6d1740cf8569', 'name' => 'Orange',
			'color' => 'orange', 'shape' => 'Spherical', 'taste' => 'Tangy & Sweet'
		)
	);
}

?>