;<?php die() ?>
; SVN FILE: $Id: acl.ini.php 7848 2008-11-08 02:58:37Z renan.saddam $
;/**
; * Test App Ini Based Acl Config File
; *
; *
; * PHP versions 4 and 5
; *
; * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
; * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
; *
; *  Licensed under The MIT License
; *  Redistributions of files must retain the above copyright notice.
; *
; * @filesource
; * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
; * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
; * @package       cake
; * @subpackage    cake.app.config
; * @since         CakePHP(tm) v 0.10.0.1076
; * @version       $Revision: 7848 $
; * @modifiedby    $LastChangedBy: renan.saddam $
; * @lastmodified  $Date: 2008-11-08 03:58:37 +0100 (Sat, 08 Nov 2008) $
; * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
; */

;-------------------------------------
;Users
;-------------------------------------

[admin]
groups = administrators
allow =
deny = ads

[paul]
groups = users
allow =
deny =

[jenny]
groups = users
allow = ads
deny = images, files

[nobody]
groups = anonymous
allow =
deny =

;-------------------------------------
;Groups
;-------------------------------------

[administrators]
deny =
allow = posts, comments, images, files, stats, ads

[users]
allow = posts, comments, images, files
deny = stats, ads

[anonymous]
allow =
deny = posts, comments, images, files, stats, ads