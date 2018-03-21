<?php namespace contentmonkey;
include 'cm-config.php';
require 'vendor/autoload.php';
require 'inc/classes/DatabaseProvider.class.inc.php';
require 'inc/classes/Mysql.class.inc.php';
require 'inc/classes/MysqlPDO.class.inc.php';
require 'inc/classes/Settings.class.inc.php';
$db = new Mysql(DATABASE_HOST, DATABASE_DATABASE, DATABASE_USER, DATABASE_PASSWORD);
$db->Connect(DATABASE_HOST, DATABASE_DATABASE, DATABASE_USER, DATABASE_PASSWORD);
$smarty = new \Smarty();
$smarty->caching = false;
$smarty->setTemplateDir("cm_content/themes/modern/templates");
$smarty->assign("foo", "bar");
echo($smarty->fetch("page.tpl"));

?>
