<?php
/*var_dump($_POST);*/

require "operation.php";


if(isset($_POST["submit"]))
{
    $number1 = $_POST["number-one"];
    $number2 = $_POST["number-two"];
    $operation = $_POST["operation"];
    
    if($operation === "addition")
    {
        $result = add($number1, $number2);
        echo $result;
    }
    else if($operation === "soustraction")
    {
        $result = substract($number1, $number2);
        echo $result;
    }
    else if($operation === "multiplication")
    {
        $result = multiply($number1, $number2);
        echo $result;
    }
    else if($operation === "division")
    {
        $result = divide($number1, $number2);
        echo $result;
    }
    else if($operation === "puissance")
    {
        $result = power($number1, $number2);
        echo $result;
    }
    else if($operation === "factorielle")
    {
        $result = factorial($number1);
        echo $result;
    }
}

require "calculator.phtml";


?>