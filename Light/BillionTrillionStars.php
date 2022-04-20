<?php
/* 
  There are 200 billion trillion stars in the universe.
    = 200 billion trillion
    = 200,000,000,000,000,000,000,000
    = 200 sextillion
    = 2 × 10^23
  Of these stars, we know of one planet, earth, that has intelligent life. 
*/

class BillionTrillionStars{

  // public $string = "";
  // public $integer = 0;
  // public $float = 0.01;
  // public $boolean = false;
  // public $array = [];

  // public function randomNumber(){
  //   $size = rand(0,1024);
  //   if($size = 0){
  //     return NULL;
  //   }
  //   return $size;
  // }


    public function createBit(){
        $bit = [];
      for($z=0; $z<8; $z++){
        $bit[$z] = mt_rand(0,1);
      }
      print implode('',$bit);
      print chr(implode('', $bit)); // new audio signal being sent through terminal
      return implode('',$bit);
  }
  
  public function createStructure(){
    $size = mt_rand(0, 8096);
    $insert = mt_rand(0, $size);
    $file_name = "files/" . time() . ".pSys";
    $file = fopen($file_name, "w") or die("Unable to open file!");

    for($i=0; $i<$size; $i++){
      if($i === $insert){
        $createData = $this->createBit();
        $output = $createData;
        file_put_contents($file_name, $output, FILE_APPEND | LOCK_EX);
          $chr = chr($output);
          file_put_contents($file_name, $chr, FILE_APPEND | LOCK_EX);
        continue;
      }
      $createStruct = $this->createBit();
      $output = $createStruct;
      file_put_contents($file_name, $output, FILE_APPEND | LOCK_EX);
      $chr = chr($output);
      file_put_contents($file_name, $chr, FILE_APPEND | LOCK_EX);
    }
    fclose($file);
  }
  

 /*create random binary data from 0-1024 bit size if size is 0 input is null
  create random combination of DNA structures of 1-1024 size
  output binary data
  compare binary data input/output, has it changed?
  notification if it has changed */
  
  public function generation($num){
    for($g=0; $g<$num; $g++){
      $this->createStructure();
    }
  }
  
}
