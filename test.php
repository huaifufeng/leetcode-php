<?php
$fileList = scandir("problems/");

foreach ($fileList as $file) {
    if ($file == "." || $file == "..") {
        continue;
    }

    $realPath = realpath("problems/" . $file );

    if (is_dir($realPath)) {
        $fileNewList = scandir($realPath);
        foreach ($fileNewList as $fileNew) {
            if ($fileNew == "." || $fileNew == "..") {
                continue;
            }
            require "problems/" . $file . "/" . $fileNew;
        }
        continue;
    }

    require $realPath;
}
require "./common.php";

$res = balancedStringSplit("RLRRLLRLRL");

var_dump($res);