<?php
class Theme{
    //idTh`, `theme
private $idTh ;
private $theme;

public function __construct(){

}

public function getIdTh(){
    return $this->idTh;
}

public function setIdTh($idTh){
    $this->idTh = $idTh;
    return $this;
}

public function getTheme(){
    return $this->theme;
}
public function setTheme($theme){
    $this->theme = $theme;
    return $this;
    
}

}






?>