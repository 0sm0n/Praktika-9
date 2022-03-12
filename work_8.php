<?php
function test($string) {
    if ($string == strrev($string))
        return "Да";
    else
        return "Нет";
}
echo test('madam')."<br>";
echo test('robot');