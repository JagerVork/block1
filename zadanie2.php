<?php
function test (&$array,$key1,$key2) 
{
    list($array[$key1],$array[$key2]) = array($array[$key2],$array[$key1]);

}

function sortirovka ($s) 
{
    $i = $j = 0; 
    if (is_array($s)) {
        $n = count($s);
    } else {
        $s = (string)$s;
        $n = mb_strlen($s);
    }	
    for ($i=1; $i<$n; $i++) {
        $j = $i;
        while (($j>0) && ($s[$j] < $s[$j-1])) {
            test($s,$j,$j-1);
            $j = $j-1;
        }
    }
    return $s;
}
$s = array(7,13,66,0,49,91,234,777,49,65);
var_dump(sortirovka($s));
?>
