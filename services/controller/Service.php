<?php

class Service {

  protected $data;

  function __construct(){
    $this->data = file_get_contents("php://input");
  }

  public function json_response($data, $status) {
    header("Content-Type: text/plain");
    header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
    return json_encode($data);
  }

  private function _requestStatus($code){
     $status = array(
       200 => "OK",
       404 => "Not found",
       500 => "Internal Server Error",
       300 => "Task Not found"
     );
     return ($status[$code])? $status[$code] : $status[500];
   }

  protected function getJSONData(){
    return json_decode($this->data);
  }

}
 ?>
