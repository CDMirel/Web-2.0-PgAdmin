<?
/*************************************************************
*
*    This is a configuration file for Web 2.0 PG Admin
*
*************************************************************/

$sys_home = str_replace('conf.php', '', substr(__FILE__, strlen($_SERVER['DOCUMENT_ROOT'])));

// -- users
$def_users = Array();
$def_users['admin']	= 'minsk78';

// -- databases
$sys_dbs = Array();			   // ip:[port]:user:pass
$sys_dbs['192.168.1.99 - postgres'] 	= 'localhost::postgres:lum3n';
$sys_dbs['192.168.1.99 - drupal'] 		= 'localhost::drupal:drupal';
$sys_dbs['192.168.1.98 - postgres'] 	= '192.168.1.98::postgres:lum3n';

?>