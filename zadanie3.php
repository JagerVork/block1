<?php
$str = 'qwertyuiopasdfghjklzxcvbnm';
if ((strlen($str)) % 2==0 ) {
    echo "Boy!";
} 
else  {
    echo "Girl!";
}
echo "<br/>";
echo substr(str_shuffle($str),10,100);

?>