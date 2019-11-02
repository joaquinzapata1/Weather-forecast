<?php
require_once "Service.php";

class WeatherService extends Service {

  private $city;
  private $encoded;
  private $apikey;

  function __construct() {
      parent::__construct();
      $this->city = $_GET['city'];
      $this->encoded = urlencode($this->city);
      $this->apikey = "100aeef4fdde16cad47ea7459ec18418";
      $this->data = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q={$this->encoded}&appid={$this->apikey}&units=metric");
  }


  function Weather(){
    $results = array();
    $decoded = $this->getJSONData();

    $results['name'] = $decoded->name;
    $results['id'] = $decoded->weather[0]->id;
    $results['weather'] = $decoded->weather[0]->main;
    $results['temp'] = $decoded->main->temp;
    $results['humidity'] = $decoded->main->humidity;
    $results['wind'] = $decoded->wind->speed;

    return (isset($results)) ? $this->json_response($results, 200) : $this->json_response(null, 404);
  }

}
?>
