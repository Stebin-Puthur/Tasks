<?php
    $str = "   hello hi";
    $words = explode(" ", $str);

    $shortestword = strlen($str);
    for ($i = 0; $i < count($words); $i++) {
        if (strlen($words[$i]) != 0) {
            if (strlen($words[$i]) > $shortestword) {
                continue;
            } else {
                $shortestword = strlen($words[$i]);
            }
        }
    }
    echo "The length of shortest word is: " . $shortestword;
?>