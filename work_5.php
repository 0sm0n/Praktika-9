<?php
function test($s1) {
    $n = strlen($s1);
    if($n == 1)  {
        return $s1;
    }
    else {
        $n--;
        return test(substr($s1,1, $n)) . substr($s1, 0, 1);
    }
}
print_r(test('0987654321')."\n");