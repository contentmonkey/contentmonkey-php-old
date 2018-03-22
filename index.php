<?php namespace contentmonkey;
include 'cm-config.php';
require 'vendor/autoload.php';
require 'inc/classes/DatabaseProvider.class.inc.php';
require 'inc/classes/Mysql.class.inc.php';
require 'inc/classes/MysqlPDO.class.inc.php';
require 'inc/classes/Settings.class.inc.php';
$db = new Mysql(DATABASE_HOST, DATABASE_DATABASE, DATABASE_USER, DATABASE_PASSWORD);
$db->Connect(DATABASE_HOST, DATABASE_DATABASE, DATABASE_USER, DATABASE_PASSWORD);
define('TEMPLATE_DIR', 'cm-content/themes/'.Settings::getSetting("active_theme").'/');
$smarty = new \Smarty();
$smarty->caching = false;
$smarty->setTemplateDir(TEMPLATE_DIR."templates");
$importStylesheetHTML = "<!-- THEME STYLESHEET IMPORTS -->";
require TEMPLATE_DIR.'theme.info.php';
foreach($theme_stylesheets as $stylesheet) {
  if(substr($stylesheet, 0, 9) === "external:") {
    $importStylesheetHTML = $importStylesheetHTML."<link rel='stylesheet' type='text/css' href='".str_replace("external:", "", $stylesheet)."'>";
  } else {
    $importStylesheetHTML = $importStylesheetHTML."<link rel='stylesheet' type='text/css' href='".TEMPLATE_DIR.$stylesheet."'>";
  }
}
$importStylesheetHTML = $importStylesheetHTML.'<!-- /THEME STYLESHEET IMPORTS -->';
$smarty->assign("stylesheets", $importStylesheetHTML);
$importScriptHTML = "<!-- THEME SCRIPT IMPORTS -->";
foreach($theme_scripts as $script) {
  if(substr($script, 0, 9) === "external:") {
    $importScriptHTML = $importScriptHTML."<link rel='stylesheet' type='text/css' href='".str_replace("external:", "", $script)."'>";
  } else {
    $importScriptHTML = $importScriptHTML."<link rel='stylesheet' type='text/css' href='".TEMPLATE_DIR.$script."'>";
  }
}
$importScriptHTML = $importScriptHTML.'<!-- /THEME SCRIPT IMPORTS -->';
$smarty->assign("scripts", $importScriptHTML);
echo($smarty->fetch("page.tpl"));

?>
