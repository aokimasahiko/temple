<?php
$height = 230;
// もし $height が 150　未満の数値なら、 { } のなかが実行される
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200){
    echo "200cm 以上の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
$weekday = "月曜" ;
switch ($weekday) {
    case "月曜":
    case "木曜":
        echo "可燃ごみの日です。 ";
        break;
    case "水曜":
        echo "資源ごみの日です。 ";
        break;
    default:
        echo "回収はありません。 ";
        break;
}
$a = 3;
$b = 3;
$c = "3";
var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a === $c);
var_dump($a !== $c);
for($i = 0; $i < 10; $i++){
    echo $i;
}
echo "\n";
$total = 0;
echo $total;
echo "\n";
for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;
echo "\n";
$fruits = array("apple", "orange", "lemon");
echo count($fruits);
echo "\n";
for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" .$fruits[$i];
}
echo "\n";
$animals = array("dog", "cat", "panda");
foreach($animals as $animal){
    echo "要素は" . $animal;
}
echo "\n";
$name = "Masahiko";
if ($name = "あなたの名前") {
    echo "私はあなたの名前です。";
}else {
    echo "あなたの名前ではありません。";
}
echo "\n";
$total = 0;
echo $total;
echo "\n";
for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
$fruits = array("apple", "grape", "lemon", "strawberry", "peach"); 
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
}
echo "\n";
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
    if($i % 5 == 0){
        echo "$i";
    }
}
?>
