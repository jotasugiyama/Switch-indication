<?php
require_once('pickup.php');
class Recomend extends Pickup {
  public function __construct($img, $title, $view, $name){
    $this->img = $img;
    $this->title = $title;
    $this->view = $view;
    $this->name = $name;
  }

  public function getImg(){
    return $this->img;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getView(){
    return $this->view;
  }

  public function getName(){
    return $this->name;
  }
}


?>
