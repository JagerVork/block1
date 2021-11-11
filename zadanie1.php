<?php
$array_users = array (
    "Иван Иванов",
    "Иван Петров",
    "Петр Иванов",
    "Петр Петров",
    "Сидор Иванов",
    "Сидор Петров")
;
$subStr='Гена Букин';
$result1 = array();
$result2 = array();
$search= strpos($array_users, $subStr);
for ($i=0;$i<count($array_users); $i++)
    for($j=0; $j<count($subStr); $j++)
    if ($array_users[$i]==$subStr[$j]){
     $result1[] = $array_users[$i];
     $result2[] = $array_users[$j];
    }
    {

if ($pos === false){
    array_unshift($result1, $subStr);
    var_dump ($result1);
}else{
    array_unshift($result2, $subStr);
    var_dump ($result2);
}
    }
?>
