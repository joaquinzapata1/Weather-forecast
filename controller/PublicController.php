<?php

require_once  "./view/PublicView.php";

class PublicController {

  private $view;

  function __construct(){
    $this->view = new PublicView();
  }

  function Home(){
    $this->view->Home("Weather forecast");
  }

}


?>
