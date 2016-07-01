<?php

class MainController extends Controller{

  public function getHome($id1=''){
    if ($id1==1) {
      return "DATA1";
    }else{
      return "Not found";
    }
  }


}

?>
