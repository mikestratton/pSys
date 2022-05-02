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


    /**
     * @throws Exception
     */
    public function createBit(): int
    {
        $bit = [];
        for($z=0; $z<8; $z++){
            $bit[$z] = random_int(0,1);
        }
        return implode('', $bit);
    }

    /**
     * @throws Exception
     */
    public function createStructure(): void
    {
        $size = random_int(0, 1024);
        $file_name = sprintf("files/%s.pSys", microtime());
        $file = fopen($file_name, 'wb') or die("Unable to open file!");
        for($i=0; $i<$size; $i++){
            $newBit = chr($this->createBit());
            file_put_contents($file_name, chr($this->createBit()), FILE_APPEND | LOCK_EX);
        }
        print $newBit;
        fclose($file);
    }
  

 /*create random binary data from 0-1024 bit size if size is 0 input is null
  create random combination of DNA structures of 1-1024 size
  output binary data
  compare binary data input/output, has it changed?
  notification if it has changed */

    /**
     * @throws Exception
     */
    public function generation($num): void
    {
        for($g=0; $g<$num; $g++){
          $this->createStructure();
        }
    }
  
}
