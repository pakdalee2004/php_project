<?php

$prefix = $_POST['sex'];

switch ($prefix){
    case 'นาย':
        echo "Male";
        break;

    case 'นาง':
        echo "Famele";
        break;

     case 'นางสาว':
        echo "นางสาว";
        break;

    case 'เด็กชาย':
        echo "เด็กชาย";
        break;

    case 'เด็กหญิง':
        echo "เด็กหญิง";
        break;
     
    default:
    echo "กรุณากรอกข้อมูล";
    break;
          
}

?>