<?php

class Para {
  public $lenght;
  public $width;
  public $height;

public function __construct($lenght,$width,$height) {

  $this -> lenght = $lenght;
  $this -> width = $width;
  $this -> height = $height;
}

public function getArea() {

  $area = 2 * ($this -> lenght * $this -> width + $this -> lenght * $this -> height + $this -> width * $this -> height);
  return $area;
}
public function getVolume(){
  $volume = $this -> lenght * $this -> width * $this -> height;
  return $volume;
}




 ?>
