<?php echo "hello world!" ; 
// 変数 $integer に　20 を代入
$integer = 20;
echo $integer;
// 変数 $string に"abc" を代入
$string = "abc";
echo $string;
// 変数 $integer と　10 を足した結果を　変数 $new_integer に代入する。
$new_integer = $integer + 10;
// 変数 $new_integer を出力する
echo $new_integer;
// 変数 $array に　配列 [2017, 2018, 2019, 2020] を代入する
$array = [2017, 2018, 2019, 2020];
echo $array[0];
echo $array[2];
$array2 =["spring", "summer", "autumn", "winter"];
echo $array2[2];
// $animals という連想配列を定義する
$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥"
];
echo $animals["cat"];
echo $animals["bird"];
// $result に true を代入する。
$result = true;
// もし $resuit が true であれば、成功しました。表示される
// そうでなければ、　失敗しました　が表示される
if ($result == true) {
    echo "成功しました。";
} else {
    echo "失敗しました。";
} // => 成功しました。　が表示される
$value = 6;
echo $value + 2;
echo $value - 2;
echo $value * 2;
echo $value / 2;
$value2 = "AAA";
echo $value2 . "BBB";
$value3 = 10;
$result = $value3 == 20;
var_dump($result);
$result = $value3 < 20;
var_dump($result);
$result = $value3 > 20;
var_dump($result);
$a = "20";
$b = "20";
$result = $a == $b;
var_dump($result);
++$value3;
echo $value3;
$value3 = 10;
--$value3;
echo $value3;
$value3 = 10;
$value3 += 5;
echo $value3;
$value3 = 10;
$value3 -= 5;
echo $value3;
$value4 = 'apple';
$value4 .= 'orange';
echo $value4;
$value5 = 10;
$result = ($value5 < 20) ? '$value5 は 20 より小さい' : '$value5 は 20 と等しいかまたは大きい';
echo $result;
$value6 = 10;
$result = ($value6 < 20) ? "$value6 は 20 より小さい" : "$value6 は 20 と等しいかまたは大きい";
echo $result;
$c = "3";
$d = "7";
echo $c + $d ;
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];
$hello = "Hello, ";
$name = "Masahiko";
$world = "'s World!";
echo $hello . $name . $world;
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
?>