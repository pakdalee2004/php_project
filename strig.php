<?php
    $name="sulkiflee";
    $grade="3.55";
    $fullname="55";
    $sql = "SELECT * FROM std WHERE user = '$user'";
    $word = "I LOVE YOU";
    $search ="iam study at infomation tecnology";




    //Counting Strig
    echo strlen($fullname); 
    echo str_word_count($word)."ค่า<br>";
    echo strrev($word,"study")."<br>";
    echo str_replace("love","hate","I love you".$word)."<br>";

?>