<?php
function my_is_multiple(int $divider, int $multiple) : bool {
    /**
     * Your code here
     */
    $result = $multiple/$divider;

    if (is_int($result) === true) {
        return true;
    }
    else {
        return false;
    }

}
my_is_multiple(2, 4);
my_is_multiple(2, 5);
?>