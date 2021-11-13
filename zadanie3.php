<?php
function random_nickname()
{
$strmas=array("q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m");
$chislo=rand(10,100);
$nickname='';
for ($i=10; $i<$chislo; $i++){
    $nickname .=$strmas[random_int(10,count($strmas)-1)];
}
return $nickname;
}
$nick = join(array_unique(preg_split("//u",random_nickname())));
echo $nick;
echo "<br/>";
$str_nickname=mb_strlen($nick,'utf8');
echo $str_nickname;
echo "<br/>";
{
    if(($str_nickname % 2)==0) {
        print ("Boy!");
    }else{
        print ("Girl!");
    }
}
?>
