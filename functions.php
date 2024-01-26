<?php
function getRandomPassword()
{
    $password = $_GET["password"];
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!.,$%&/()&/';
    $n = [];
    $Length = strlen($characters) - 1;
    for ($i = 0; $i < $password; $i++) {
        $num = rand(1, $Length);
        $n[] = $characters[$num];
    }
    return implode($n);
}