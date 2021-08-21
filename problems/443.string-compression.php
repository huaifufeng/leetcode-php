<?php
/**
 * https://leetcode-cn.com/problems/string-compression/
 *
 * @param String[] $chars
 * @return Integer
 */
function compress(&$chars) {
    $lastChar = "";
    $num = $index = 0;
    foreach ($chars as $i => $char) {
        if ($lastChar != $char) {
            if ($num > 0) {
                $chars[$index] = $lastChar;
                $index++;
                if ($num > 1) {
                    $numStr = strval($num);
                    for ($i =0; $i < strlen($numStr); $i++){
                        $chars[$index] = $numStr[$i];
                        $index++;
                    }
                }
            }

            $lastChar = $char;
            $num = 1;
            continue;
        }

        $num++;
    }
    if ($num > 0) {
        $chars[$index] = $lastChar;
        $index++;
        if ($num > 1) {
            $numStr = strval($num);
            for ($i =0; $i < strlen($numStr); $i++){
                $chars[$index] = $numStr[$i];
                $index++;
            }
        }
    }


    $chars = array_slice($chars, 0, $index);

    return count($chars);
}