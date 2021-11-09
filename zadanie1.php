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
if ($pos === false){
    array_unshift($result1, $subStr);
    var_dump ($result1);
}else{
    array_unshift($result2, $subStr);
    var_dump ($result2);
}
print_r ($array_users)\n ;
?>
