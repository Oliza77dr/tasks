<?php
/**
 * Created by PhpStorm.
 * User: Olga
 * Date: 7/6/2017
 * Time: 9:56 PM
 */
$arr = array(234,1,175,345,765,765,1,234,543,345,175,543,33);
echo "<pre>";
print_r($arr);
echo "</pre>";

$len = count($arr);
echo $len;
sort($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";

for ($i=0;$i<$len;$i=$i+2){
    if ($arr[$i]===$arr[$i+1]){

    }else{
        echo $arr[$i];
        break;
    }
}
