<?php

$contents = file_get_contents($argv[1]);

$found = [];
$minlen = 4;
$minfrq = 2;
$topen = '<[';
$tclose = ']>';

foreach(explode(" ", $contents) as $word){
    $word = trim($word);
    $word = str_replace(['.',',',':',';','-','!',';'],"",$word);
    if(!preg_match("/^[\w]+$/ui", $word)){
        continue;
    }
    if(mb_strlen($word) < $minlen){
        continue;
    }

    $v =& $found[mb_strtolower($word)];
    $v++;
}

arsort($found);

foreach($found as $k => $v){
    if($v < $minfrq){
        unset($found[$k]);
    }
}

$in = fopen("php://stdin","r");
$out = $contents;

foreach($found as $w => $v){
    echo "$w - $v (y/n): ";
    $ans = trim(fgets($in));
    if($ans == 'y'){
        $out = str_ireplace($w,$topen.$w.$tclose,$out);
        file_put_contents(dirname($argv[1])."/frwt.".basename($argv[1]), $out);
    }
}

