<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['expression'])) {
    $expression = $_POST['expression'];
    if (isValidExpression($expression)) {
        try {
            $result = evaluateExpression($expression);
            echo $result;
        } catch (Exception $e) {
            echo "Ошибка: некорректное выражение";
        }
    } else {
        echo "Ошибка: некорректное выражение";
    }
} else {
    echo "Ошибка: отсутствует выражение";
}


function isValidExpression($expression) {

    return preg_match('/^[0-9+\-*/(). ]+$/', $expression);
}


function evaluateExpression($expression) {

    $expression = str_replace(' ', '', $expression);
    
    
    while (preg_match('/\(([^()]+)\)/', $expression, $match)) {
        $subResult = calculate($match[1]);
        $expression = str_replace($match[0], $subResult, $expression);
    }

    
    return calculate($expression);
}


function calculate($expr) {
    
    while (preg_match('/(-?\d+)\s*([*/])\s*(-?\d+)/', $expr, $match)) {
        $result = $match[2] === '*' ? $match[1] * $match[3] : $match[1] / $match[3];
        $expr = str_replace($match[0], $result, $expr);
    }

    while (preg_match('/(-?\d+)\s*([+-])\s*(-?\d+)/', $expr, $match)) {
        $result = $match[2] === '+' ? $match[1] + $match[3] : $match[1] - $match[3];
        $expr = str_replace($match[0], $result, $expr);
    }

    return $expr;  
}
?>