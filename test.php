<?php
$fileList = scandir("problems/");

foreach ($fileList as $file) {
    if ($file == "." || $file == "..") {
        continue;
    }

    require "problems/" . $file;
}


//$res4 = prefixesDivBy5([1,0,1,1,1,1,0,0,0,0,1,0,0,0,0,0,1,0,0,1,1,1,1,1,0,0,0,0,1,1,1,0,0,0,0,0,1,0,0,0,1,0,0,1,1,1,1,1,1,0,1,1,0,1,0,0,0,0,0,0,1,0,1,1,1,0,0,1,0]);

$res = pivotIndex([1,7,3,6,5,6]);

var_dump($res);