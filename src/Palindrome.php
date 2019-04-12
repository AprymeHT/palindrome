<?php
function isPalindrome($text) {

    $text = mb_strtolower($text);
    $text = trim($text);

    $length     = mb_strlen($text);
    $halfLength = floor($length / 2);

    $lastCharIndex = $length - 1;

    for ( $i = 0; $i < $halfLength; $i++ ) {
        if ( $text[$i] != $text[$lastCharIndex - $i] )
            return false;
    }

    return true;
}