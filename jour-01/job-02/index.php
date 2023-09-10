<?php
function my_str_reverse(string $string) : string {
    /**
    * Your code here
    */
    $stringInversed = "";
    for($i = 4; $i >= 0; $i--) {
        $stringInversed = $stringInversed + $string[$i];
    }
    return $stringInversed;
}
my_str_reverse('Hello');
?>