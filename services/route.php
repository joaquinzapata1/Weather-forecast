<?php

require_once "config/Config.php";
require_once "controller/WeatherService.php";

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[Config::$RESOURCE] = $urlExploded[0].'#'.$_SERVER['REQUEST_METHOD'];
  $arrayReturn[Config::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['resource'])){
    $urlData = parseURL($_GET['resource']);
    $resource = $urlData[Config::$RESOURCE];
    if(array_key_exists($resource,Config::$RESOURCES)){
        $params = $urlData[Config::$PARAMS];
        $resource = explode('#',Config::$RESOURCES[$resource]);
        $controller =  new $resource[0]();
        $method = $resource[1];
        if(isset($params) &&  $params != null){
            echo $controller->$method($params);
        }
        else{
            echo $controller->$method();
        }
    }
}
?>
