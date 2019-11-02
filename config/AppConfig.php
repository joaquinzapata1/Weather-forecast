<?php


define('HOME',"Location: http://".$_SERVER["SERVER_NAME"] . ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));

class AppConfig {
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    '' => 'PublicController#Home',
    'home'=> 'PublicController#Home'

  ];
}


 ?>
