<?php
include 'Light/BigBang.php';
include 'Light/BillionTrillionStars.php';

$bigBang = new BigBang();
// $GodSaidLight = $bigBang->ExplodeTimesTwo();
// $binary = $bigBang->ZeroOrOne($GodSaidLight);
// print 200000000000000000000000;

$num = 200000000000000000000000;
$num2 = 32;
$num3 = mt_rand(1,8192);
$stars = new BillionTrillionStars();
$stars->generation($num3);
// print $stars->createBit();
// $input = $stars->createData();
// print $stars->createData();
// print $stars->createStructure();