<?php
$fileList = scandir("problems/");

foreach ($fileList as $file) {
    if ($file == "." || $file == "..") {
        continue;
    }

    require "problems/" . $file;
}


$res = findMedianSortedArrays([1,3], [2,3]);

var_dump($res);