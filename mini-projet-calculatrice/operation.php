<?php

function add(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

function substract(int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}

function multiply(int $nb1, int $nb2) : int
{
    return $nb1 * $nb2;
}

function divide(int $nb1, int $nb2)
{
    if($nb2 === 0)
    {
        echo "On ne peut pas diviser par 0 !";
    }
    else
    {
        return $nb1 / $nb2;
    }
}

function modulo(int $nb1, int $nb2) : int
{
    return $nb1 % $nb2;
}

function power(int $nb1, int $nb2) : int
{
    return $nb1 ** $nb2;
}

function factorial(int $nb1) : int
{
    if ($nb1 === 0 || $nb1 === 1) {
        return 1;
    } else {
        return $nb1 * factorielle($nb1 - 1);
    }
}

?>