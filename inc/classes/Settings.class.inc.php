<?php namespace contentmonkey;
/**
 * Created by PhpStorm.
 * User: marvin
 * Date: 21.03.18
 * Time: 09:37
 */

class Settings {

    public function getSetting($key) {
      global $db;
      return $db->QueryArray("SELECT * FROM `cm_settings` WHERE property='".$key."';")[0][2];
    }
}

?>
