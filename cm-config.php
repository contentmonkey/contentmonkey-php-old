<?php namespace contentmonkey;
define('DATABASE_USER', 'contentmonkey');
define('DATABASE_PASSWORD', 'BIg7tzUU0DxHz74w');
define('DATABASE_HOST', 'localhost');
define('DATABASE_DATABASE', 'contentmonkey');
define('DATABASE_PREFIX', 'cm_');
define('SETUP_QUERIES', array(
  "CREATE TABLE `".DATABASE_PREFIX."settings` ( `id` INT NOT NULL AUTO_INCREMENT , `property` TEXT NOT NULL , `value` TEXT NOT NULL , `description` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;",
  "INSERT INTO `".DATABASE_PREFIX."settings` (`id`, `property`, `value`, `description`) VALUES (NULL, 'active_theme', 'modern', '');"
));
?>
