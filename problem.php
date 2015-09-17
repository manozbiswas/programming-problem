<?php
/**
* Solution of a Pangram problem in php
*/

function isPangram($strings)
{
    foreach ($strings as $string) {
        $haystack = range('a', 'z');
        foreach (str_split(strtolower($string)) as $char) {
            if (in_array($char, $haystack)) {
              $key = array_search($char,$haystack);
                unset($haystack[$key]);
            }
        }
       // var_dump($haystack);
        if(count($haystack)==0){
            echo 1;
        }
        else echo 0;
    }
}

$tests = array(
    "the quick Brown fox jumps over the lazy dog",
    "the quick brown fox jumped over the lazy dog",
    "the quick brown fox jumps over the lazy dog",
    "the quiCk brown fox jumps over the lazy dog",
);

 isPangram($tests);
