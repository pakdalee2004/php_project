<?php

//ให้ใช้ switch
//กำหนดคำสั่งพื้นหลัง <body style='backgrund-color: green;'>

$day = "fri";

switch ($day){

case 'sun';
    echo "<body style='background-color: red;'>";
    break;

case 'mon';
    echo "<body style='background-color: yellow;'>";
    break;

case 'tuse';
    echo "<body style='background-color: pink;'>";
    break;

case 'web';
    echo "<body style='background-color: green;'>";
    break;

case 'thurs';
    echo "<body style='background-color: orange;'>";
    break;

case'fri';
    echo "<body style='background-color: blue;'>";
    break;

    case 'sat';
    echo "<body style='background-color: purple;'>";
    break;

}
?>