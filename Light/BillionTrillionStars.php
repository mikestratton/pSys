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
      for($z=0; $z<8; $z++){
        $bit .= rand(0,1);
      }
    return $bit;
  }
  
  public function createData(){
    $size = rand(0,128);

    if($size == 0){
      return NULL;
    }
    for($b=0; $b<$size; $b++){
      $data .= $this->createBit();
    }
    print $data;
  }
  
  public function createStructure(){
    $size = rand(0, 128);
    $insert = rand(0, $size);
    $file_name = "files/" . microtime() . ".pSys";
    
    for($i=0; $i<$size; $i++){
      if($i === $insert){
        $createData = $this->createBit();
        // print chr($createData);
        $output = chr($createData);
        $file = fopen($file_name, "w") or die("Unable to open file!");
        fwrite($file, $output);
        continue;
      }
      // print chr($this->createBit());
      $output = chr($this->createBit());
      $file = fopen($file_name, "w") or die("Unable to open file!");
      fwrite($file, $output);
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
