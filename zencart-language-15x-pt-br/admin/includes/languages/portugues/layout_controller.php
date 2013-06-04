<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                    |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers              |
// |                                   |
// | http://www.zen-cart.com/index.php                  |
// |                                   |
// | Portions Copyright (c) 2003 osCommerce                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,    |
// | that is bundled with this package in the file LICENSE, and is    |
// | available through the world-wide-web at the following url:      |
// | http://www.zen-cart.com/license/2_0.txt.               |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to    |
// | license@zen-cart.com so we can mail you a copy immediately.     |
// +----------------------------------------------------------------------+
// $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
//

define('HEADING_TITLE', 'Column Boxes');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Box File Name');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'LEFT/RIGHT COLUMN<br />Estado');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'SINGLE COLUMN<br />Estado');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'LEFT or RIGHT<br />COLUMN');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'LEFT/RIGHT COLUMN<br />Sort Order');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'SINGLE COLUMN<br />Sort Order');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, fa&ccedil;a os ajustes necess&aacute;rios');
define('TEXT_INFO_LAYOUT_BOX','Selected Box: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Box Name:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Location: (Single Column ignores this setting)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Left/Right Column Estado: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Single Column Estado: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','LIGADO= 1 DESLIGADO=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Left/Right Column Sort Order:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Single Column Sort Order:');
define('TEXT_INFO_INSERT_INTRO', 'Please enter the new box with its related data');
define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir this box?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Novo Box');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Editar Box');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Excluir Box');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Delete missing box from Template listing: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','NOTA: This does not remove files and you can re-add the box at anytime by adding it to the correct directory.<br /><br /><strong>Delete box name: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Reset All Box Sort Order to match DEFAULT Sort Order for Template: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','This does not remove any of the boxes. It will only reset the current sort order');
define('TEXT_INFO_BOX_DETAILS','Box Details: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Site Template Layout');

define('TABLE_HEADING_LAYOUT_TITLE', 'Title');
define('TABLE_HEADING_LAYOUT_VALUE', 'Value');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');


define('TEXT_MODULE_DIRECTORY', 'Site Layout Directory:');
define('TEXT_INFO_DATE_ADDED', 'Adicionado em:');
define('TEXT_INFO_LAST_MODIFIED', 'Modificado em:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Layout');
define('BOX_LAYOUT_COLUMNS', 'Column Controller');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>MISSING</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Successfully removed from the template of the box: ');
define('SUCCESS_BOX_RESET','Successfully Reset all box settings to the Default settings for Template: ');
define('SUCCESS_BOX_UPDATED','Successfully Updated settings for box: ');

define('TEXT_ON',' LIGADO ');
define('TEXT_OFF',' DESLIGADO ');
define('TEXT_LEFT',' LEFT ');
define('TEXT_RIGHT',' RIGHT ');

?>