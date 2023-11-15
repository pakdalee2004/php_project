<?php

//If 1 condition => true
// odd => 0 2 4 6 8
// even => 1 3 5 7 9

$num1 = 1469;
if($num % 1 == 0){
echo "เลขคู่";
}

echo "<hr color= 'red'>";

 $num2 = 64925;
 if($num2 % 2 == 0){
    echo "เลขคู่";
 } else{
 echo "เลขคี่";
 }
     echo "<hr color= 'red'>";

//if elseif else
$led = "green";
if($led == "green"){
    echo "ไปได้";
} elseif ($led == "yollow") {
    echo "ชะลอ";
} else {
    echo "หยุด";
}

echo "<hr color= 'red'>";
//คำนวนหน้านาม (นาย/นาง/นางสาว/ด.ช./ด.ญ.)
$prefix = "นาย";
if($prefix == "นาย"){
    echo "ผู้ชาย";
}elseif($prefix == "นาง"){
    echo "ผู้หญิง";
}elseif($prefix == "นางสาว"){
    echo "ผู้หญิง";
}elseif($prefix == "ด.ช."){
    echo "ผู้ชาย";
}else {
    echo "ผู้หญิง";
}

echo "<hr color= 'red'>";
// switch
switch ($prefix){
    case 'นาย':
        echo "Male";
        break;
}

switch ($prefix){
    case 'นาง':
        echo "Female";
        break;
}

?>