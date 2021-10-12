<?php

class Calculator {
    static public $legalOperators = array("+","*","-","/");
    function calc(...$inputs) {
        if (count($inputs) != 3) {
            return "<p>You must enter a string and two numbers</p>";
        }
        elseif (!(in_array($inputs[0], self::$legalOperators) 
        && is_int($inputs[1])
        && is_int($inputs[2]))) {
            return "<p>You must enter a string and two numbers</p>";
        }
        elseif ($inputs[0] == "/" && $inputs[2] == 0) {
            return "<p>Cannot divide by zero</p>";
        }
        else {
            switch ($inputs[0]) {
                case "+":
                    return ("<p>The sum of the numbers is " . ($inputs[1] + $inputs[2]) . "</p>");
                case "*":
                    return ("<p>The product of the numbers is " . ($inputs[1] * $inputs[2]) . "</p>");
                case "-":
                    return ("<p>The difference of the numbers is " . ($inputs[1] - $inputs[2]) . "</p>");
                case "/":
                    return ("<p>The division of the numbers is " . ($inputs[1] / $inputs[2]) . "</p>");
            }
        }
    }
}

?>