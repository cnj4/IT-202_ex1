<?php

$testArray = Array();

$testArray[] = 18;
$testArray[] = "47";
$testArray[] = "fifty-two";

var_dump($testArray);

function arraySwap(array $inArray)
{
  $rtnArr = Array();
  for($i = count($inArray)-1; $i >= 0; $i--)
  {
    $rtnArr[] = $inArray[$i];
  }
  return $rtnArr;
}

$newTestArray = arraySwap($testArray);

var_dump($newTestArray);

?>