<?php

include_once 'View.php';

class PublicView extends View{

  function Home($title){
    $this->smarty->assign('title',$title);
    $this->smarty->display('home.tpl');
  }

}


 ?>
