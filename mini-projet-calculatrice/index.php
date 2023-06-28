<?php

$number1 = intval($_POST["number-one"]);
$number2 = intval($_POST["number-two"]);

$operation = $_GET["operation"];

require "calculator.phtml";

?>