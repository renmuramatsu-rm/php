<?php
for ($i = 0; $i < 4; $i++){
    echo $i;
}
for ($i = 1; $i <= 5; $i++){
    echo $i * 2 . '<br />';
}
$i = 0;
while ($i < 10){
    if($i == 5){
        $i++;
        continue;
    }
    echo  $i;
    $i ++;
}
$count = 0;
while ($count <= 100){
     if($count === 20){
        break;
    }
    if($count % 3 === 0 ){
        $count++;
        continue;
    }
   
    echo $count . '<br />';
    $count++;
}
    $i = 0;
    do {
        echo $i . '<br />';
        $i++;
    }while($i < 5);
 $num = 0;
 do {
    echo "num = $num" . "<br />";
    $num++;
 }while($num < 3);

 for($fiz = 1; $fiz<=50;$fiz++){
    if($fiz % 15 === 0 ){
        echo "FizzBuzz";
    }
    else if($fiz % 5 === 0 ){
        echo "Buzz";
    }
    else if($fiz % 3 === 0 ){
        echo "Fizz";
    }
    else{
        echo $fiz;
    }
 }
for($i = 1; $i <= 4;$i++){
    for($j = 1; $j < 5; $j++){
        echo "●";
    }
    echo "<br />";
}

function outputHello()
{echo "Hello World";
}
outputHello();

function text($a, $b){
    $val = $a + $b;
    return $val;
}
$val = text(2,3);
print $val;

function add($score1, $score2, $score3){
    $val = $score1 + $score2 + $score3;

if($val > 210){
    echo "合計点は" . $val . "なので合格です";
}
else{
    echo "合計点は" . $val . "なので不合格です";
}
}
echo (add(50, 90, 100));

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);