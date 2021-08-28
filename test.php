<?php
$fileList = scandir("problems/");

foreach ($fileList as $file) {
    if ($file == "." || $file == "..") {
        continue;
    }

    require "problems/" . $file;
}


//$res4 = prefixesDivBy5([1,0,1,1,1,1,0,0,0,0,1,0,0,0,0,0,1,0,0,1,1,1,1,1,0,0,0,0,1,1,1,0,0,0,0,0,1,0,0,0,1,0,0,1,1,1,1,1,1,0,1,1,0,1,0,0,0,0,0,0,1,0,1,1,1,0,0,1,0]);

$param = [1, 1,1,1,1];
$res = runningSum($param);

var_dump($res);