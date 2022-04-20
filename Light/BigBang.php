<?php 
// "Then God said, “Let there be light”; and there was light. (Genesis 1:3)"
class BigBang{
  
// 1 2 4 8 16 32 64 128 256 512 1024 2048
  function ExplodeTimesTwo(){
    // $toThePowerOf = pow(2, rand(1,2048));
    $toThePowerOf = pow(2, 8192);
    return $toThePowerOf;
  }

  // 0 or 1
  function ZeroOrOne($count){
   // $chars = rand(0,255);
    
    for($i=0; $i<$count; $i++){
      $out = NULL; 
      settype($out, 'integer');
      for($x=0; $x<8; $x++){
        $out .= (rand(0,1));
       
      }
       // print pow(2,8192); // prints inf
      print chr($out); // prints ascii and audio signal
       
    }
    // print pow(2,8192);
    // print "\nNUMBER: " . $toThePowerOf . "\n";
  }

 
}
