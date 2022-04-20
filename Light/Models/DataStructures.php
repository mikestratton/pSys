<?php

class DataStructures{

  private $_id;
  // private $_size;
  // private $_datatypes;
  // private $_timestamp;
  
  public function __construct($id,$size,$datatypes,$timestamp){
    $this->setId($id);
  }

  public function getId($id){
    return $this->_id;
  }

  public function setId($id){
    $this->_id = $id;
  }

  public function returnStructure(){
    $structures = array();
    $structures['id'] = $this->getId();
  }
}