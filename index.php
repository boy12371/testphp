<?php
$arr = array('word1'=>'测试', 'word2'=>'Hello PHP', 'word3'=>'中国');

//echo json_encode($arr);
foreach($arr as $key => $value){
    $arr[$key] = urlencode($value);
}

echo urldecode(json_encode($arr));
?>
