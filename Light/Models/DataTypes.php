<?php

class DataTypes{

  private $_id;
  private $_string;
  private $_integer;
  private $_float;
  private $_boolean:
  private $_array;
  private $_object;
  private $_null;
  private $_timestamp;

  public function __construct($id, $string, $integer, $float, $boolean, $array, $object, $null, $timestamp){
    $this->setId($id);
    $this->setString($string);
    $this->setInteger($integer);
    $this->setFloat($float);
    $this->setBoolean($boolean);
    $this->setArray($array);
    $this->setObject($object);
    $this->setNull($null);
    $this->setTimestamp($timestamp);
   }

  public function getId($id){
    return $this->_id;
  }
  public function getString(){
    return $this->_string;
  }
  public function getInteger(){
    return $this->_integer;
  }
  public function getFloat(){
    return $this->_float;
  }
  public function getBoolean(){
    return $this->_boolean;
  }
  public function getArray(){
    return $this->_array;
  }
  public function getObject(){
    return $this->_object;
  }
  public function getNull(){
    return $this->_null;
  }
  public function getTimestamp(){
    return $this->_timestamp;
  }

  public function setId($id){
    $this->_id = $id;
  }
  public function setString($string){
    $this->_string = $string;
  }
  public function setInteger($integer){
    $this->_integer = $integer;
  }
  public function setFloat($float){
    $this->_float = $float;
  }
  public function setBoolean($boolean){
    $this->_boolean = $boolean;
  }
  public function setArray($array){
    $this->_array = $array;
  }
  public function setObject($object){
    $this->_object = $object;
  }
  public function setNull($null){
    $this->_null = $null;
  }
  public function setTimestamp($timestamp){
    $this->_timestamp = $timestamp;
  }
  
  public function returnDataTypes(){
    $data_types = array();
    $data_types['id'] = $this->getId();
    $data_types['string'] = $this->getString();
    $data_types['integer'] = $this->getInteger();
    $data_types['float'] = $this->getFloat();
    $data_types['boolean'] = $this->getBoolean();
    $data_types['array'] = $this->getArray();
    $data_types['object'] = $this->getObject();
    $data_types['null'] = $this->getNull();
        
    return $data_types;
    }
}