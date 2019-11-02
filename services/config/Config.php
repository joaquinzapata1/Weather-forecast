<?php
  class Config {
      public static $RESOURCE = 'resource';
      public static $PARAMS = 'params';
      public static $RESOURCES = [
        'weather#GET'=> 'WeatherService#Weather'
      ];
  }
?>
