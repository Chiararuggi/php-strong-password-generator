<?php
function getRandomPassword()
{
    $password = $_GET["password"];
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!.,$%&/()&/';
    $n = [];
    $charactersLength = strlen($characters) - 1;
    for ($i = 0; $i < $password; $i++) {
        $num = rand(1, $charactersLength);
        $n[] = $characters[$num];
    }
    return implode($n);
}