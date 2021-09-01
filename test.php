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


$head =  new ListNode(1);
$node1 = new ListNode(2);
$head->next = $node1;
$node2 = new ListNode(3);
$node1->next = $node2;
$node3 = new ListNode(4);
$node2->next = $node3;
$node4 = new ListNode(5);
$node3->next = $node4;
$res = getKthFromEnd1($head, 2);

var_dump($res);