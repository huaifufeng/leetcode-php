<?php
$fileList = scandir("problems/");

foreach ($fileList as $file) {
    if ($file == "." || $file == "..") {
        continue;
    }

    require "problems/" . $file;
}


$res1 = longestPalindrome("babad");
$res2 = longestPalindrome("cbbd");
$res3 = longestPalindrome("a");
$res4 = longestPalindrome("ac");

var_dump($res1,$res2, $res3, $res4);