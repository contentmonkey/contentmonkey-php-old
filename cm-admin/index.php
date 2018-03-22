<?php namespace contentmonkey\admin;
require '../vendor/autoload.php';
$smarty = new \Smarty();
$smarty->setTemplateDir("includes/templates");
$smarty->caching = false;
if(isset($_GET["p"])) {$page = $_GET["p"];} else {$page = "home";}

function outputRaw($content) {
  echo $content;
}

function output($file) {
  if(file_exists("includes/templates/".$file.".tpl")) {
    outputRaw($GLOBALS["smarty"]->fetch($file.".tpl"));
  } else {
    outputRaw($GLOBALS["smarty"]->fetch("404.tpl"));
  }
}

output($page);

?>
