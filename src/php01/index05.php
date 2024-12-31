<?php
$a = 7;
if($a === 5){
    echo "\$aは5です";
    }elseif($a === 7){
        echo "\$aは7です";
    }else{
        echo "$aは5と7以外です";
    }
$people = "Saburo";
switch ($people){
    case "Taro";
    echo "太郎です";
    break;
    case "Saburo";
    echo "三郎です";
}
$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;
