<?php
function sum($max) {
  $result = 0;
  for($i = 1; $i <= $max; $i++){
    $result += $i;
  }
  return $result;
}
echo sum(100);
echo "\n";
$string = "ABCDEF";
echo strlen($string);
echo "\n";
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
echo "\n";
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
echo "\n";
$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);
echo "\n";
arsort($array);
print_r($array);
echo "\n";
function kadai01($value){
  return $value*2;
}
echo kadai01(10);
echo "\n";
function kadai02($a, $b){
  return $a + $b ;
}
echo kadai02(20,40);
echo "\n";
function kadai03($arr){
  $result = 1;
  foreach($arr as $value){
    $result *= $value;
  }
  return $result;
}
echo kadai03([1, 3, 5, 7, 9]);
echo "\n";
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($a > $max_number){
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array([3, 15, 35, 21, 7]);
?>
