<?php

    $url = $_GET['url'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $body = curl_exec($ch);
    curl_close($ch);


    $str = $body;
    $pat = '/<\s*script/i';
    $rep = '<fuckscript';
    echo preg_replace($pat, $rep, $str);

?>
