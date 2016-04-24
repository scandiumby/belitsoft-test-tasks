<?php

class Image{

  private $class;
  private $src;
  private $alt;

  public function __construct($classImage, $srcImage, $altImage){
    $this->class = $classImage;
    $this->src = $srcImage;
    $this->alt = $altImage;
  }

  private function html(){
    return "<img class='$this->class' src='$this->src' alt='$this->alt'>";
  }

  private function html_with_link(){
    return "<a href='$this->src' target='_blank'>" . $this->html() . '</a>';
  }

  public function show_with_link(){
    if ($this->src) {
      echo $this->html_with_link();
    } else {
      echo $this->html();
    }
  }

}

?>
