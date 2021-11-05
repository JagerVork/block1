<?php
$nickname= 'qwertyuiopasdfghjklzxcvbnm';
$num = substr(str_shuffle($nickname),10,100);
echo $num;
echo "<br/>";
{
    if(($num % 2)==0) {
        print ("Boy!");
    }else{
        print ("Girl!");
    }
}
?>