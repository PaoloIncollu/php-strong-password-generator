<?php

function generatePassword($lenght){
    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    $password = '';

    $i=0;
    while ($i < $lenght) {
        $password .= $comb[rand(0, strlen($comb) - 1)];
        $i++;
    }
    return $password;


    
};

