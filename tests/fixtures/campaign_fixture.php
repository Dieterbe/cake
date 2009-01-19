<?php
/* SVN FILE: $Id: campaign_fixture.php 7848 2008-11-08 02:58:37Z renan.saddam $ */
/**
 * Short description for campaign_fixture.php
 *
 * Long description for campaign_fixture.php
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://www.cakephp.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     CakePHP(tm) : Rapid Development Framework (http://www.cakephp.org)
 * @link          http://www.cakephp.org
 * @package       cake
 * @subpackage    cake.tests.fixtures
 * @since         1.2
 * @version       $Revision: 7848 $
 * @modifiedby    $LastChangedBy: renan.saddam $
 * @lastmodified  $Date: 2008-11-08 03:58:37 +0100 (Sat, 08 Nov 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * CampaignFixture class
 *
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class CampaignFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'Campaign'
 * @access public
 */
	var $name = 'Campaign';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'name' => array('type' => 'string', 'length' => 255, 'null' => false),
	);
/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('name' => 'Hurtigruten'),
		array('name' => 'Colorline'),
		array('name' => 'Queen of Scandinavia')
	);
}

?>