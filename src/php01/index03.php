<?php
$name = "Tanaka";
$last_name = "Yamada";
$first_name = "Saburo";

echo $name . "Jiro";
echo "<br />";
echo $last_name . $first_name;

function add($a, $b, $c){
    $add = $a + $b + $c;
   if($add > 210){
     echo "合計点は" . $add . "なので合格です";
   }else{
     echo "合計点は" . $add . "なので不合格です";
   }
}
   echo add(80,90,80);
$people = [
    [
    'person' => 'taro',
    'person2' => 'jiro',
    ],
    [
        'age' => 29,
        'age2' => 30,
    ]
];
echo $people[1]['age2'] . '<br />';

$friend=[
    'friend1'=>'taro',
    'friend2'=>'jiro',
    'friend3'=>'saburo'
];

foreach($friend as $best=>$name){
    echo $name . '<br />';
}

