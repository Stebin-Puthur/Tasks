<?php

$arr1 = array(1, 2, 3, 4, 5);
$arr2 = array(1, 4, 3, 2);

if (count($arr1)!=count($arr2)){
    sort($arr2);
    for ($i=0; $i<count($arr2); $i++){
        if ($arr1[$i]!=$arr2[$i]){
            $res = $arr1[$i];
            break;
        }
    }
    if (empty($res)){
        $res = $arr1[count($arr1) - 1];
    }
}
else{
    echo 0;
}

echo $res;

?>