<?php

require_once "config/AppConfig.php";
require_once "controller/PublicController.php";

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[AppConfig::$ACTION] = $urlExploded[0];
  $arrayReturn[AppConfig::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;

  return $arrayReturn;
}

if(isset($_GET['action'])){

    $urlData = parseURL($_GET['action']);
    $action = $urlData[AppConfig::$ACTION];
    if(array_key_exists($action,AppConfig::$ACTIONS)){
        $params = $urlData[AppConfig::$PARAMS];
        $action = explode('#',AppConfig::$ACTIONS[$action]);
        $controller =  new $action[0]();
        $method = $action[1];
        if(isset($params) &&  $params != null){
            echo $controller->$method($params);
        }
        else{
            echo $controller->$method();
        }
    }else{
      $controller =  new PublicController();
      echo $controller->Home();
    }
}
 ?>
