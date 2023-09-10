<?php 

function my_str_search(string $haystack, string $needle) : int {
    /**
    * Your code here
    */
    $occurences = 0;
    for($i = 0; $i <= 13; $i++) {
        if ($haystack[$i] === $needle) {
            $occurences++;
        }
    }
    return $occurences;
}
my_str_search('La Plateforme', 'a');

?>